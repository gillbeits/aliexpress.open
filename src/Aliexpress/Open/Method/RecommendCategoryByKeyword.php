<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 16:03
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class RecommendCategoryByKeyword extends Method
{
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/api.recommendCategoryByKeyword';

    /**
     * @var string
     * @NotBlank
     */
    private $keyword = "";
}