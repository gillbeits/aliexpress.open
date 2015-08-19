<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 17.08.15
 * Time: 17:27
 */
namespace Aliexpress\Open\Tests\Method;


class GetChildrenPostCategoryByIdTest extends AbstractMethod
{
    public function testRequest()
    {
        /** @var \Aliexpress\Open\Model\aeopPostCategoryList|\Aliexpress\Open\Model\aeopPostCategory[] $result */
        $result = $this->api->GetChildrenPostCategoryById()->execute();
        $this->assertEquals($result[0]->getLocaleName(), 'Одежда и аксессуары');
    }
}
