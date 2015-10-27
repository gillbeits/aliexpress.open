<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 13.10.15
 * Time: 14:06
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Aliexpress\Open\Model\aeopAeProductProperty;
use Aliexpress\Open\Model\aeopAeProductPropertyList;
use Aliexpress\Open\Model\aeopAeProductSKU;
use Aliexpress\Open\Model\aeopAeProductSKUList;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditProductCidAttIdSku extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editProductCidAttIdSku';

    /**
     * @var int
     * @NotBlank()
     */
    private $productId;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var aeopAeProductSKUList|aeopAeProductSKU[]
     */
    private $productSkus;

    /**
     * @var aeopAeProductPropertyList|aeopAeProductProperty[]
     */
    private $productProperties;
}