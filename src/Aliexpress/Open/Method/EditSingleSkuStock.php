<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 24.09.15
 * Time: 9:51
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditSingleSkuStock extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editSingleSkuStock';

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
     * @var int
     * @NotBlank()
     */
    private $ipmSkuStock;
}