<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 23.09.15
 * Time: 18:02
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;

class ListFreightTemplate extends Method {
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/api.listFreightTemplate';
}