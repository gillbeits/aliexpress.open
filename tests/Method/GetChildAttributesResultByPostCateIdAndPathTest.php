<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 16:47
 */

namespace Aliexpress\Open\Tests\Method;


use GuzzleHttp\Exception\ClientException;

class GetChildAttributesResultByPostCateIdAndPathTest extends AbstractMethod
{
    public function testRequest()
    {
        try {
            $result = $this->api->GetChildAttributesResultByPostCateIdAndPath([
                'cateId' => 100003249
            ])->execute();
            print_r($result);
        } catch (ClientException $e) {
            var_dump($e->getMessage(), $e->getRequest()->getBody()->getContents(), $e->getResponse()->getBody()->getContents());
        }
    }
}
