<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 16:12
 */

namespace Aliexpress\Open;


class Request
{
    /** @var  string */
    protected $scheme;
    /** @var  string */
    protected $method;
    /** @var  string */
    protected $methodPath;
    /** @var array  */
    protected $methodParams;
    /** @var string  */
    protected $api;

    public function __construct($method, $methodPath, $methodParams = [], $scheme = Api::DEFAULT_SCHEME, $api = Api::API)
    {
        $this->method = $method;
        $this->methodPath = $methodPath;
        $this->methodParams = $methodParams;
        $this->scheme = $scheme;
        $this->api = $api;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getMethodPath()
    {
        return Api::getInstance()->getType() . $this->methodPath;
    }

    /**
     * @return array
     */
    public function getMethodParams()
    {
        return $this->methodParams;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }
}