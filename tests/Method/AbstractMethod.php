<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 15:01
 */
namespace Aliexpress\Open\Tests\Method;


use Aliexpress\Open\Api;

abstract class AbstractMethod extends \PHPUnit_Framework_TestCase
{
    /** @var  Api */
    protected $api;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->api = Api::getInstance();
    }
}