<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 15:50
 */

namespace Aliexpress\Open;


use Aliexpress\Open\Creational\Singleton;
use Aliexpress\Open\Exception\NoMethodExists;
use Aliexpress\Open\Method\GetChildAttributesResultByPostCateIdAndPath;
use Aliexpress\Open\Method\GetChildrenPostCategoryById;
use Aliexpress\Open\Method\PostAeProduct;
use Aliexpress\Open\Method\RecommendCategoryByKeyword;
use Aliexpress\Open\Method\UploadImage;
use Aliexpress\Open\Method\UploadTempImage;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\Reader;
use Symfony\Component\Validator\Exception\ValidatorException;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Yaml\Yaml;

/**
 * Class Api
 * @package Aliexpress\Open
 *
 * @method RecommendCategoryByKeyword RecommendCategoryByKeyword(mixed $options)
 * @method GetChildrenPostCategoryById GetChildrenPostCategoryById(mixed $options)
 * @method GetChildAttributesResultByPostCateIdAndPath GetChildAttributesResultByPostCateIdAndPath(mixed $options)
 * @method PostAeProduct PostAeProduct(mixed $options)
 * @method UploadImage UploadImage(mixed $options)
 * @method UploadTempImage UploadTempImage(mixed $options)
 */
class Api
{
    use Singleton;

    const HTTP_SCHEME = 'http';
    const HTTPS_SCHEME = 'https';
    const DEFAULT_SCHEME = self::HTTP_SCHEME;

    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    const TYPE_PARAM2 = 'param2';

    const URL = 'gw.api.alibaba.com';

    const API_OPENAPI = 'openapi';
    const API_FILEAPI = 'fileapi';
    const API = self::API_OPENAPI;

    const SIGN_PARAM = '_aop_signature';
    const TIMESTAMP_PARAM = '_aop_timestamp';

    const ACCESS_TOKEN = 'access_token';
    const REFRESH_TOKEN = 'refresh_token';

    /** @var  string */
    protected $appKey;
    /** @var  string */
    protected $appKeySecret;
    /** @var string  */
    protected $scheme;
    /** @var  string */
    protected $type = self::TYPE_PARAM2;

    /** @var  array */
    protected $config;
    /** @var  string */
    protected $configFile;

    /** @var  string */
    protected $temporary_auth_code;
    /** @var  string */
    protected $refresh_token;
    /** @var  string */
    protected $access_token;

    /** @var Reader  */
    protected $annotationReader;
    /** @var \Symfony\Component\Validator\ValidatorBuilderInterface  */
    protected $validatorBuilder;

    protected function create($appKey = null, $appKeySecret = null, $refreshToken = null, Reader $annotationReader = null)
    {
        if (is_string($appKey) && file_exists($path = realpath($appKey)) && ($this->config = Yaml::parse(file_get_contents($path)))) {
            $this->configFile = $path;
            $this->appKey = $this->config['system']['appKey'];
            $this->appKeySecret = $this->config['system']['appKeySecret'];
            $this->temporary_auth_code = $this->config['system']['tempAuthCode'];
            if ($this->config['dynamic']['appRefreshToken'] && $this->config['dynamic']['appRefreshTokenTimeout'] > time()) {
                $this->setRefreshToken($this->config['dynamic']['appRefreshToken']);
            }
            if ($this->config['dynamic']['appAccessToken'] && $this->config['dynamic']['appAccessTokenTimeout'] > time()) {
                $this->setAccessToken($this->config['dynamic']['appAccessToken']);
            }
            $annotationReader = $appKeySecret;
        } else {
            $this->appKey = $appKey;
            $this->appKeySecret = $appKeySecret;
            $this->refresh_token = $refreshToken;
        }

        $this->annotationReader = $annotationReader ? new AnnotationReader() : $annotationReader;
        $this->validatorBuilder = Validation::createValidatorBuilder()->enableAnnotationMapping($this->annotationReader);

        if (!empty($this->config) && null === $this->getRefreshToken() && null === $this->getAccessToken() && !$this->config['dynamic']['appAccessTokenTimeout'] && !$this->config['dynamic']['appRefreshTokenTimeout']) {
            /** @var \GuzzleHttp\Psr7\Response $result */
            $result = $this->GetToken([
                'client_id' => $this->getAppKey(),
                'client_secret' => $this->getAppKeySecret(),
                'code' => $this->temporary_auth_code
            ])->execute();

            $this->setRefreshToken($result->refresh_token);
            $this->setAccessToken($result->access_token);

            $refreshTokenTimeout = $result->refresh_token_timeout;
            preg_match("%(\d{14})(\d{3})([+-]\d{4})%", $refreshTokenTimeout, $refreshTokenTimeout);

            $this->config['dynamic']['appAccessToken'] = $result->access_token;
            $this->config['dynamic']['appAccessTokenTimeout'] = time() + $result->expires_in;
            $this->config['dynamic']['appRefreshToken'] = $result->refresh_token;
            $this->config['dynamic']['appRefreshTokenTimeout'] = (new \DateTime($refreshTokenTimeout[1] . $refreshTokenTimeout[3]))->getTimestamp();
            file_put_contents($this->configFile, Yaml::dump($this->config));
        }

        if (null === $this->getAccessToken()) {
            /** @var \GuzzleHttp\Psr7\Response $result */
            $result = $this->GetToken([
                'grant_type' => 'refresh_token',
                'client_id' => $this->getAppKey(),
                'client_secret' => $this->getAppKeySecret(),
                'refresh_token' => $this->getRefreshToken(),
                'need_refresh_token' => 'false'
            ])->execute();
            if ($result->access_token) {
                $this->setAccessToken($result->access_token);
                if (!empty($this->config)) {
                    $this->config['dynamic']['appAccessToken'] = $result->access_token;
                    $this->config['dynamic']['appAccessTokenTimeout'] = time() + $result->expires_in;
                    file_put_contents($this->configFile, Yaml::dump($this->config));
                }
            }
        }

        if (null === $this->getRefreshToken() || null === $this->getAccessToken()) {
            throw new \RuntimeException("No valid refresh token or valid access token");
        }
    }

    /**
     * @param null|string $name
     * @param null $config
     * @return mixed
     */
    public function getConfigParams($name = null, $config = null)
    {
        if (null === $config) $config = $this->config;
        if (null === $name) return $config;
        if (count($name = explode('.', $name)) == 1) return $config[$name[0]];
        else {
            return $this->getConfigParams(implode('.', array_slice($name, 1)), $config[$name[0]]);
        }
    }

    /**
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getAppKeySecret()
    {
        return $this->appKeySecret;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     * @return self
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     * @return self
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

    public function __call($method, $args)
    {
        $class = "Aliexpress\\Open\\Method\\" . $method;
        if (!class_exists($class)) {
            throw new NoMethodExists($class);
        }
        $reflect  = new \ReflectionClass($class);
        $instance = $reflect->newInstanceArgs($args);
        if (($constraints = $this->validatorBuilder->getValidator()->validate($instance)) && $constraints->count()) {
            $error = $constraints->get(0);
            throw new ValidatorException($error->getPropertyPath() . ": " . $error->getMessage());
        }
        return $instance;
    }
}
