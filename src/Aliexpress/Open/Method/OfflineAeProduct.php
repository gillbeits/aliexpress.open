<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 24.09.15
 * Time: 9:39
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class OfflineAeProduct extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.offlineAeProduct';

    /**
     * @var string
     * @NotBlank()
     */
    private $productIds;
}