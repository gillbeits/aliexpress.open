<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 19.08.15
 * Time: 10:50
 */

namespace Aliexpress\Open\Tests\Method;


use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class UploadImageTest extends AbstractMethod
{
    public function testRequest()
    {
        $result = $this->api->UploadImage([
            'file' => 'http://cdn.kupanda.ru/cfs1/offer_product/14/71/14713f691940affab915ced293692843.jpg'
        ])->execute();
        $this->assertEquals("SUCCESS", $result->status);
    }
}
