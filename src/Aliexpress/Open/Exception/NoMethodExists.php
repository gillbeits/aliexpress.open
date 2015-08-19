<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 16:30
 */

namespace Aliexpress\Open\Exception;


use Exception;

class NoMethodExists extends \RuntimeException
{
    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Construct the exception. Note: The message is NOT binary safe.
     * @link http://php.net/manual/en/exception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param Exception $previous [optional] The previous exception used for the exception chaining. Since 5.3.0
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct("Method {$message} does't exists", $code, $previous);
    }
}