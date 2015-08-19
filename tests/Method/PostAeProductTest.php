<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 14:20
 */
namespace Aliexpress\Open\Tests\Method;


use Aliexpress\Open\Model\aeopAeProductProperty;
use Aliexpress\Open\Model\aeopAeProductSKU;
use Aliexpress\Open\Model\aeopSKUProperty;
use Aliexpress\Open\Model\aeProduct;

class PostAeProductTest extends AbstractMethod
{
    public function testRequest()
    {
        $product = new aeProduct();
        $photos = [
            __DIR__ . "/../_assets/55fdfbf2f61a1c5cd2750a93a321e140.jpg" => "",
            __DIR__ . "/../_assets/14713f691940affab915ced293692843.jpg" => ""
        ];
        foreach ($photos as $name => &$value) {
            $result = $this->api->UploadImage([
                'file' => $name
            ])->execute();
            $this->assertEquals("SUCCESS", $result->status);
            $value = $result->photobankUrl;
        }

        $descr =<<<HTML
<li>Еда должна быть не&nbsp;только вкусной, но&nbsp;и&nbsp;красиво оформленной, чтобы вызывать аппетит. Любая хозяйка знает, как непросто нарезать овощи и&nbsp;фрукты идеальным ломтиками или кубиками. А&nbsp;если нужно приготовить много салатов, то&nbsp;это отнимает еще и&nbsp;большое количество времени. С&nbsp;таким помощником как овощерезка Nicer Dicer Plus, у&nbsp;вас не&nbsp;будет проблем с&nbsp;приготовлением блюд. Она сделает вашу жизнь комфортней и&nbsp;сэкономит время.</li> <li>Nicer Dicer Plus&nbsp;&mdash; это непревзойденное немецкое качество и&nbsp;технологии. В&nbsp;отличие от&nbsp;других овощерезок, лезвия Nicer Dicer Plus из&nbsp;нержавеющей стали сконструированы таким образом, чтобы фрукты и&nbsp;овощи с&nbsp;кожурой не&nbsp;сминались при нарезании.</li> <li>На&nbsp;профессиональных или домашних кухнях не&nbsp;обойтись без этого механического приспособления, которое может очищать кожуру, шинковать и&nbsp;крошить любые фрукты и&nbsp;овощи (в&nbsp;том числе и&nbsp;вареные) квадратами, мелкими кубиками, соломкой, дольками.</li> <li>Если вам требуется нарубить зелень, фрукты для экзотического десерта, красиво оформить изысканный салат, приготовить украшение для торта, применяйте Nicer Dicer Plus.</li> <li>Нашинковать целый килограмм лука и&nbsp;не&nbsp;уронить ни&nbsp;одной слезы поможет это маленькое кухонное чудо. Больше не&nbsp;существует опасности порезать пальцы&nbsp;&mdash; ведь они не&nbsp;соприкасаются с&nbsp;острыми лезвиями. Кусочки лука перемещаются прямо в&nbsp;пластиковые контейнеры, защищая вас от&nbsp;слез и&nbsp;специфического запаха.</li> <li>Цукини и&nbsp;томаты, вареные яйца, картофель и&nbsp;морковь, груши и&nbsp;яблоки, огурцы и&nbsp;перец, чеснок и&nbsp;ананасы&nbsp;&mdash; она режет все. Целых 11&nbsp;способов нарезки продуктов помогут вам реализовать все кулинарные фантазии и&nbsp;радовать близких людей вкусными шедеврами. Отныне все ваши блюда, даже самые сложные, будут иметь идеальный вид, а&nbsp;на&nbsp;кухонном столе всегда будет порядок.</li> <li>В&nbsp;комплекте:<br>&mdash;&nbsp;режущий верхний элемент с&nbsp;квадратными шпильками; <br>&mdash;&nbsp;режущий нижний элемент; <br>&mdash;&nbsp;прозрачная емкость для хранения (объем 1500&nbsp;мл); <br>&mdash;&nbsp;крышка на&nbsp;емкость для хранения; <br>&mdash;&nbsp;режущий вкладыш (маленький и&nbsp;средний); <br>&mdash;&nbsp;режущий вкладыш (большой и&nbsp;для нарезания продуктов ломтиками); <br>&mdash;&nbsp;режущий вкладыш на&nbsp;четвертинки и&nbsp;клинья; <br>&mdash;&nbsp;съемная насадка на&nbsp;лезвия прибора; <br>&mdash;&nbsp;частичная защитная накладка на&nbsp;все режущие вкладыши; <br>&mdash;&nbsp;насадка-терка (крупная терка) с&nbsp;защитной крышкой; <br>&mdash;&nbsp;насадка для нарезания продуктов ломтиками с&nbsp;защитной крышкой для лезвия; <br>&mdash;&nbsp;насадка для фиксации нарезаемых продуктов с&nbsp;устройством, предназначенным для проталкивания пищи; <br>&mdash;&nbsp;овощечистка; <br>&mdash;&nbsp;ломтерезка; <br>&mdash;&nbsp;терка.</li>
HTML;

        /** Основной товар */
        $product
            ->setDetail($descr)
            ->setDeliveryTime(1)
            ->setCategoryId(100003249)
            ->setSubject("Nicer Dicer Plus")
            ->setKeyword("slicer")
            ->setFreightTemplateId(703469012)
            ->setImageURLs(implode(";", $photos))
            ->setProductUnit(100000015)
            ->setPackageLength(35)
            ->setPackageWidth(20)
            ->setPackageHeight(15)
            ->setGrossWeight("1.1")
        ;
        /**
         * Вариация
         */
        $sku = new aeopAeProductSKU();
        $sku
            ->setId("c5cbe989-216c-11e5-80c7-00259097749b")
            ->setSkuCode('NicerDicerPlus')
            ->setSkuPrice((string)round(380.00/65.8289, 2))
            ->setSkuStock(true)
            ->setIpmSkuStock(654)
        ;

        $skuProperty = new aeopSKUProperty();
        $skuProperty
            ->setSkuPropertyId(200007763)
            ->setPropertyValueId(201336103)
        ;
        $sku->addAeopSKUProperty($skuProperty);
        $product->addAeopAeProductSKU($sku);


        $property = new aeopAeProductProperty();
        $property
            ->setAttrNameId(100004828)
            ->setAttrValueId(100007213)
        ;
        $product->addAeopAeProductProperty($property);
        $result = $this->api->PostAeProduct($product)->execute();
        $this->assertTrue($result->success);
    }
}
