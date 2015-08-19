<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 19.08.15
 * Time: 16:27
 */

namespace Aliexpress\Open\Init;


use Aliexpress\Open\Api;
use Aliexpress\Open\Sign;
use Composer\Script\Event;
use Incenteev\ParameterHandler\Processor;
use Incenteev\ParameterHandler\ScriptHandler;
use Symfony\Component\Yaml\Parser;

class Init
{
    public static function buildParameters(Event $event)
    {
        ScriptHandler::buildParameters($event);
        $extras = $event->getComposer()->getPackage()->getExtra();

        if (!isset($extras['aliexpress-open'])) {
            throw new \InvalidArgumentException('The parameter handler needs to be configured through the extra.aliexpress-open setting.');
        }

        $configs = $extras['aliexpress-open'];

        if (!is_array($configs)) {
            throw new \InvalidArgumentException('The extra.aliexpress-open setting must be an array or a configuration object.');
        }

        if (!file_exists($configs['file']) && file_exists($extras['incenteev-parameters']['file'])) {

            $YamlParser = new Parser();
            $YamlValues = $YamlParser->parse(file_get_contents($extras['incenteev-parameters']['file']));
            $params = [
                'client_id' => $YamlValues[$extras['incenteev-parameters']['parameter-key']]['appKey'],
                'redirect_uri' => 'urn:ietf:wg:oauth:2.0:oob',
                'site' => 'aliexpress'
            ];
            ksort($params);
            $paramsForSign = $params;
            array_walk($paramsForSign, function (&$value, $key) { $value = $key . $value; });
            $params[Api::SIGN_PARAM] = Sign::getSignString(implode("", $paramsForSign), $YamlValues[$extras['incenteev-parameters']['parameter-key']]['appKeySecret']);
            $link = "http://gw.api.alibaba.com/auth/authorize.htm?" . http_build_query($params, null, '&', PHP_QUERY_RFC3986);
            $event->getIO()->write('<comment>Goto ' . $link . ' and get temporary auth code.</comment>');
            $processor = new Processor($event->getIO());
            $processor->processFile($configs);
        }
    }
}