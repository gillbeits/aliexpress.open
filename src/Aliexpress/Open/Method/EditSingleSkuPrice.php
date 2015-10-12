<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 30.09.15
 * Time: 15:10
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditSingleSkuPrice extends Method{
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editSingleSkuPrice';

    /**
     * @var int
     * @NotBlank()
     */
    private $productId;

    /**
     * @var string
     * @NotBlank()
     */
    private $skuId;

    /**
     * @var string
     * @NotBlank()
     */
    private $skuPrice;
}