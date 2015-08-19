<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 16:16
 */

namespace Aliexpress\Open;


class Sign
{
    /** @var string  */
    protected $sign;
    /** @var  Request */
    protected $request;

    /**
     * @param $sign_str
     * @param $appKeySecret
     * @return string
     */
    public static function getSignString($sign_str, $appKeySecret)
    {
        return strtoupper(bin2hex(hash_hmac("sha1", $sign_str, $appKeySecret, true)));
    }

    public function __construct(Request $request)
    {
        $this->request = $request;
        $params = $this->request->getMethodParams();
        ksort($params);
        array_walk($params, function (&$value, $key) { $value = $key . $value; });
        $this->sign = self::getSignString($request->getMethodPath() . '/' . Api::getInstance()->getAppKey() . implode($params), Api::getInstance()->getAppKeySecret());
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    public function getFullPath()
    {
        return $this->request->getScheme() . "://" . Api::URL . "/" . $this->request->getApi() . "/" . $this->request->getMethodPath() . "/" . Api::getInstance()->getAppKey();
    }
}