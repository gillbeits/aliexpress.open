<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 19.08.15
 * Time: 11:51
 */

namespace Aliexpress\Open\Tests\Method;


class UploadTempImageTest extends AbstractMethod
{
    public function testRequest()
    {
        $result = $this->api->UploadTempImage([
            'file' => 'http://cdn.kupanda.ru/r/w/100/cfs1/offer_product/55/fd/55fdfbf2f61a1c5cd2750a93a321e140.jpg'
        ])->execute();
        $this->assertEquals("SUCCESS", $result->status);
    }
}
