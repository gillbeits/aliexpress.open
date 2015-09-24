<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 24.09.15
 * Time: 9:47
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditSimpleProductFiled extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editSimpleProductFiled';

    /**
     * @var int
     * @NotBlank()
     */
    private $productId;

    /**
     * @var string
     * @NotBlank()
     */
    private $fiedName;

    /**
     * @var string
     * @NotBlank()
     */
    private $fiedvalue;
}