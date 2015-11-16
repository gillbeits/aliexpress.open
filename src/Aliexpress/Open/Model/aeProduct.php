<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 14:04
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Ornamental\ExtendProperties;

class aeProduct
{
    use ExtendProperties;

    /**
     * @var string
     */
    protected $productId;
    /**
     * @var string
     */
    protected $detail;
    /**
     * @var aeopAeProductSKUList|aeopAeProductSKU[]
     */
    protected $aeopAeProductSKUs;
    /**
     * @var int
     */
    protected $deliveryTime;
    /**
     * @var int
     */
    protected $promiseTemplateId;
    /**
     * @var int|array
     */
    protected $categoryId;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $keyword;
    /**
     * @var string
     */
    protected $productMoreKeywords1;
    /**
     * @var string
     */
    protected $productMoreKeywords2;
    /**
     * @var string
     */
    protected $productPrice;
    /**
     * @var int
     */
    protected $freightTemplateId;
    /**
     * Разделенные ";" ссылки на изображения
     *
     * @var string
     */
    protected $imageURLs;
    /**
     * @var int
     */
    protected $productUnit;
    /**
     * @var bool
     */
    protected $packageType;
    /**
     * @var int
     */
    protected $lotNum;
    /**
     * Длина в сантиметрах
     * @var int
     */
    protected $packageLength;
    /**
     * @var int
     */
    protected $packageWidth;
    /**
     * @var int
     */
    protected $packageHeight;
    /**
     * @var string
     */
    protected $grossWeight;
    /**
     * @var bool
     */
    protected $isPackSell;
    /**
     * @var int
     */
    protected $baseUnit;
    /**
     * @var int
     */
    protected $addUnit;
    /**
     * @var string
     */
    protected $addWeight;
    /**
     * @var int
     */
    protected $wsValidNum;
    /**
     * @var aeopSKUPropertyList|aeopSKUProperty[]
     */
    protected $aeopAeProductPropertys;
    /**
     * @var int
     */
    protected $bulkOrder;
    /**
     * @var int
     */
    protected $bulkDiscount;
    /**
     * @var int
     */
    protected $sizechartId;
    /**
     * @var string
     */
    protected $reduceStrategy;
    /**
     * @var  string
     */
    private $currencyCode;

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return aeopAeProductSKU[]|aeopAeProductSKUList
     */
    public function getAeopAeProductSKUs()
    {
        return $this->aeopAeProductSKUs;
    }

    /**
     * @param aeopAeProductSKU[]|aeopAeProductSKUList $aeopAeProductSKUs
     * @return self
     */
    public function setAeopAeProductSKUs(aeopAeProductSKUList $aeopAeProductSKUs)
    {
        $this->aeopAeProductSKUs = $aeopAeProductSKUs;
        return $this;
    }

    /**
     * @param aeopAeProductSKU $aeopAeProductSKU
     * @return $this
     */
    public function addAeopAeProductSKU(aeopAeProductSKU $aeopAeProductSKU)
    {
        if (! $this->aeopAeProductSKUs instanceof aeopAeProductSKUList) $this->aeopAeProductSKUs = new aeopAeProductSKUList();
        $this->aeopAeProductSKUs->add($aeopAeProductSKU);
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param int $deliveryTime
     * @return self
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromiseTemplateId()
    {
        return $this->promiseTemplateId;
    }

    /**
     * @param int $promiseTemplateId
     * @return self
     */
    public function setPromiseTemplateId($promiseTemplateId)
    {
        $this->promiseTemplateId = $promiseTemplateId;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param array|int $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductMoreKeywords1()
    {
        return $this->productMoreKeywords1;
    }

    /**
     * @param string $productMoreKeywords1
     * @return self
     */
    public function setProductMoreKeywords1($productMoreKeywords1)
    {
        $this->productMoreKeywords1 = $productMoreKeywords1;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductMoreKeywords2()
    {
        return $this->productMoreKeywords2;
    }

    /**
     * @param string $productMoreKeywords2
     * @return self
     */
    public function setProductMoreKeywords2($productMoreKeywords2)
    {
        $this->productMoreKeywords2 = $productMoreKeywords2;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param string $productPrice
     * @return self
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getFreightTemplateId()
    {
        return $this->freightTemplateId;
    }

    /**
     * @param int $freightTemplateId
     * @return self
     */
    public function setFreightTemplateId($freightTemplateId)
    {
        $this->freightTemplateId = $freightTemplateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageURLs()
    {
        return $this->imageURLs;
    }

    /**
     * @param string $imageURLs
     * @return self
     */
    public function setImageURLs($imageURLs)
    {
        $this->imageURLs = $imageURLs;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * @param int $productUnit
     * @return self
     */
    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param boolean $packageType
     * @return self
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLotNum()
    {
        return $this->lotNum;
    }

    /**
     * @param int $lotNum
     * @return self
     */
    public function setLotNum($lotNum)
    {
        $this->lotNum = $lotNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * @param int $packageLength
     * @return self
     */
    public function setPackageLength($packageLength)
    {
        $this->packageLength = $packageLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * @param int $packageWidth
     * @return self
     */
    public function setPackageWidth($packageWidth)
    {
        $this->packageWidth = $packageWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeight()
    {
        return $this->packageHeight;
    }

    /**
     * @param int $packageHeight
     * @return self
     */
    public function setPackageHeight($packageHeight)
    {
        $this->packageHeight = $packageHeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param string $grossWeight
     * @return self
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsPackSell()
    {
        return $this->isPackSell;
    }

    /**
     * @param boolean $isPackSell
     * @return self
     */
    public function setIsPackSell($isPackSell)
    {
        $this->isPackSell = $isPackSell;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseUnit()
    {
        return $this->baseUnit;
    }

    /**
     * @param int $baseUnit
     * @return self
     */
    public function setBaseUnit($baseUnit)
    {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddUnit()
    {
        return $this->addUnit;
    }

    /**
     * @param int $addUnit
     * @return self
     */
    public function setAddUnit($addUnit)
    {
        $this->addUnit = $addUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddWeight()
    {
        return $this->addWeight;
    }

    /**
     * @param string $addWeight
     * @return self
     */
    public function setAddWeight($addWeight)
    {
        $this->addWeight = $addWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getWsValidNum()
    {
        return $this->wsValidNum;
    }

    /**
     * @param int $wsValidNum
     * @return self
     */
    public function setWsValidNum($wsValidNum)
    {
        $this->wsValidNum = $wsValidNum;
        return $this;
    }

    /**
     * @return aeopAeProductProperty[]|aeopAeProductPropertyList
     */
    public function getAeopAeProductPropertys()
    {
        return $this->aeopAeProductPropertys;
    }

    /**
     * @param aeopAeProductProperty[]|aeopAeProductPropertyList $aeopAeProductPropertys
     * @return self
     */
    public function setAeopAeProductPropertys(aeopAeProductPropertyList $aeopAeProductPropertys)
    {
        $this->aeopAeProductPropertys = $aeopAeProductPropertys;
        return $this;
    }

    /**
     * @param aeopAeProductProperty $aeopAeProductProperty
     * @return $this
     */
    public function addAeopAeProductProperty(aeopAeProductProperty $aeopAeProductProperty)
    {
        if (! $this->aeopAeProductPropertys instanceof aeopAeProductPropertyList) $this->aeopAeProductPropertys = new aeopAeProductPropertyList();
        $this->aeopAeProductPropertys->add($aeopAeProductProperty);
        return $this;
    }

    /**
     * @return int
     */
    public function getBulkOrder()
    {
        return $this->bulkOrder;
    }

    /**
     * @param int $bulkOrder
     * @return self
     */
    public function setBulkOrder($bulkOrder)
    {
        $this->bulkOrder = $bulkOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getBulkDiscount()
    {
        return $this->bulkDiscount;
    }

    /**
     * @param int $bulkDiscount
     * @return self
     */
    public function setBulkDiscount($bulkDiscount)
    {
        $this->bulkDiscount = $bulkDiscount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSizechartId()
    {
        return $this->sizechartId;
    }

    /**
     * @param int $sizechartId
     * @return self
     */
    public function setSizechartId($sizechartId)
    {
        $this->sizechartId = $sizechartId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReduceStrategy()
    {
        return $this->reduceStrategy;
    }

    /**
     * @param string $reduceStrategy
     * @return self
     */
    public function setReduceStrategy($reduceStrategy)
    {
        $this->reduceStrategy = $reduceStrategy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}