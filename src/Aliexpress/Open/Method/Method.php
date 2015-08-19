<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 16:32
 */

namespace Aliexpress\Open\Method;

use Aliexpress\Open\Api;
use Aliexpress\Open\Ornamental\ExtendProperties;
use Aliexpress\Open\Request;
use Aliexpress\Open\Sign;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\Validator\Constraints as Assert;

class Method
{
    use ExtendProperties;

    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $scheme = Api::DEFAULT_SCHEME;
    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $method;
    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $methodPath;
    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $api = Api::API;

    /** @var  Sign */
    protected $sign;

    /**
     * @return array
     */
    protected function getProperties()
    {
        $properties = [];
        foreach ($this->reflection->getProperties(\ReflectionProperty::IS_PRIVATE) as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($this);
            if (null !== $value) {
                $properties[$property->getName()] = is_array($value) ? json_encode($value) : (string)$value;
            }
        }
//        print_r($properties);
//        exit;
        // set access token to method for signature
        if (($access_token = Api::getInstance()->getAccessToken())) {
            $properties[Api::ACCESS_TOKEN] = $access_token;
        }
        $properties[Api::TIMESTAMP_PARAM] = round(microtime(true) * 1000);
        $this->sign = new Sign(new Request($this->method, $this->methodPath, $properties, $this->scheme, $this->api));
        $properties[Api::SIGN_PARAM] = $this->sign->getSign();

        return $properties;
    }

    /**
     * @return Client
     */
    protected function getClient()
    {
        return new Client();
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute()
    {
        $properties = $this->getProperties();
        $client = $this->getClient();
        switch ($this->method) {
            case Api::METHOD_GET:
                try {
                    $response = $client->get($this->sign->getFullPath(), [
                        'query' => $properties
                    ]);
                } catch (ClientException $e) {
                    var_dump($e->getResponse()->getBody()->getContents());
                }
                break;
            case Api::METHOD_POST:
                try {
                    $response = $client->post($this->sign->getFullPath(), [
                        'form_params' => $properties
                    ]);
                } catch (ClientException $e) {
                    var_dump($e->getResponse()->getBody()->getContents());
                }
                break;
            default:
                throw new \RuntimeException("Required methods " . Api::METHOD_GET . " and " . Api::METHOD_POST);
        }
        return (object)json_decode($response->getBody()->getContents(), true);
    }
}