<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 16.11.15
 * Time: 10:56
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditAeProduct extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editAeProduct';

    /**
     * @var  string
     * @NotBlank()
     */
    private $productId;

    /**
     * @var string
     * @NotBlank()
     */
    private $detail;

    /**
     * @var aeopAeProductSKUList|aeopAeProductSKU[]
     */
    private $aeopAeProductSKUs;

    /**
     * @var int
     * @NotBlank()
     */
    private $deliveryTime;

    /**
     * @var int
     */
    private $promiseTemplateId;

    /**
     * @var int|array
     * @NotBlank()
     */
    private $categoryId;

    /**
     * @var string
     * @NotBlank()
     */
    private $subject;

    /**
     * @var string
     * @NotBlank()
     */
    private $keyword;

    /**
     * @var string
     */
    private $productMoreKeywords1;

    /**
     * @var string
     */
    private $productMoreKeywords2;

    /**
     * @var string
     */
    private $productPrice;

    /**
     * @var int
     * @NotBlank()
     */
    private $freightTemplateId;

    /**
     * Разделенные ";" ссылки на изображения
     *
     * @var string
     * @NotBlank()
     */
    private $imageURLs;

    /**
     * @var int
     * @NotBlank()
     */
    private $productUnit;

    /**
     * @var bool
     */
    private $packageType;

    /**
     * @var int
     */
    private $lotNum;

    /**
     * Длина в сантиметрах
     * @var int
     * @NotBlank()
     */
    private $packageLength;

    /**
     * @var int
     * @NotBlank()
     */
    private $packageWidth;

    /**
     * @var int
     * @NotBlank()
     */
    private $packageHeight;

    /**
     * @var string
     * @NotBlank()
     */
    private $grossWeight;

    /**
     * @var bool
     */
    private $isPackSell;

    /**
     * @var int
     */
    private $baseUnit;

    /**
     * @var int
     */
    private $addUnit;

    /**
     * @var string
     */
    private $addWeight;

    /**
     * @var int
     */
    private $wsValidNum;

    /**
     * @var aeopSKUPropertyList|aeopSKUProperty[]
     */
    private $aeopAeProductPropertys;

    /**
     * @var int
     */
    private $bulkOrder;

    /**
     * @var int
     */
    private $bulkDiscount;

    /**
     * @var int
     */
    private $sizechartId;

    /**
     * @var string
     */
    private $reduceStrategy;

    /**
     * @var  string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $couponStartDate;

    /**
     * @var string
     */
    private $couponEndDate;

}