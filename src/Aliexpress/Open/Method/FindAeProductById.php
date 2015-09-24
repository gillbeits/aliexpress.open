<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 24.09.15
 * Time: 9:55
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class FindAeProductById extends Method {
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/api.findAeProductById';

    /**
     * @var int
     * @NotBlank()
     */
    private $productId;
}