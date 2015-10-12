<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 05.10.15
 * Time: 11:53
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class FindOrderReceiptInfo extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.findOrderReceiptInfo';

    /**
     * @var int
     * @NotBlank()
     */
    private $orderId;
}