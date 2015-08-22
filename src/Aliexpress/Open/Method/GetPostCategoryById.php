<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Bushmin aka deemon[at]pgpmail.org
 * Date: 22.08.15
 * Time: 16:03
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class GetPostCategoryById extends Method {
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/api.getPostCategoryById';

    /**
     * @var string
     * @NotBlank
     */
    private $cateId = "";
}