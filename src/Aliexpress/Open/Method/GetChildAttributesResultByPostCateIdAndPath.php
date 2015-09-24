<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 12:43
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class GetChildAttributesResultByPostCateIdAndPath extends Method
{
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/getChildAttributesResultByPostCateIdAndPath';

    /**
     * @var int
     * @NotBlank
     */
    private $cateId;

    /**
     * @var array|null
     */
    private $parentAttrValueList;
}