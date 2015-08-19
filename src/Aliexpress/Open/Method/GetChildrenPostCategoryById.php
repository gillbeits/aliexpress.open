<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 17.08.15
 * Time: 13:46
 */

namespace Aliexpress\Open\Method;

use Aliexpress\Open\Api;
use Aliexpress\Open\Model\aeopPostCategory;
use Aliexpress\Open\Model\aeopPostCategoryList;

/**
 * Метод получения "детей" категории по ID родительской категории
 * При catId = 0 получение верхнего уровня категорий
 *
 * @package Aliexpress\Open\Method
 */
class GetChildrenPostCategoryById extends Method
{
    protected $method = Api::METHOD_GET;
    protected $methodPath = '/1/aliexpress.open/api.getChildrenPostCategoryById';

    /**
     * @var int
     */
    private $cateId = 0;

    /**
     * @return aeopPostCategoryList
     */
    public function execute()
    {
        $data = parent::execute();
        $categories = new aeopPostCategoryList();
        foreach ($data->aeopPostCategoryList as $category) {
            $categories->add(new aeopPostCategory($category));
        }
        return $categories;
    }
}