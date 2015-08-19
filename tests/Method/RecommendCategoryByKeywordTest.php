<?php

/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 17.08.15
 * Time: 17:45
 */
namespace Aliexpress\Open\Tests\Method;


class RecommendCategoryByKeywordTest extends AbstractMethod
{
    public function testRequest()
    {
        /** @var \Aliexpress\Open\Model\aeopPostCategoryList|\Aliexpress\Open\Model\aeopPostCategory[] $result */
        $result = $this->api->RecommendCategoryByKeyword([
            'keyword' => 'Nicer Dicer'
        ])->execute();
        $this->assertTrue($result->success);
        $this->assertGreaterThan(0, $result->total);

        var_dump($result);
    }
}
