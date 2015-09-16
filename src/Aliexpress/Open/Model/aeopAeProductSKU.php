<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 13:56
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Ornamental\ExtendProperties;
use Aliexpress\Open\Ornamental\ListItem;

final class aeopAeProductSKU
{
    use ExtendProperties, ListItem;

    /** @var  string */
    private $id;
    /** @var  aeopSKUPropertyList */
    private $aeopSKUProperty;
    /** @var  string */
    private $skuPrice;
    /** @var  string */
    private $skuCode;
    /** @var  bool */
    private $skuStock;
    /** @var  int */
    private $ipmSkuStock;
    /** @var  string */
    private $currencyCode;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return aeopSKUPropertyList
     */
    public function getAeopSKUProperty()
    {
        return $this->aeopSKUProperty;
    }

    /**
     * @param aeopSKUPropertyList $aeopSKUProperty
     * @return self
     */
    public function setAeopSKUProperty(aeopSKUPropertyList $aeopSKUProperty)
    {
        $this->aeopSKUProperty = $aeopSKUProperty;
        return $this;
    }

    /**
     * @param aeopSKUProperty $aeopSKUProperty
     * @return $this
     */
    public function addAeopSKUProperty(aeopSKUProperty $aeopSKUProperty)
    {
        if (! $this->aeopSKUProperty instanceof aeopSKUPropertyList) $this->aeopSKUProperty = new aeopSKUPropertyList();
        $this->aeopSKUProperty->add($aeopSKUProperty);
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuPrice()
    {
        return $this->skuPrice;
    }

    /**
     * @param string $skuPrice
     * @return self
     */
    public function setSkuPrice($skuPrice)
    {
        $this->skuPrice = $skuPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuCode()
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     * @return self
     */
    public function setSkuCode($skuCode)
    {
        $this->skuCode = $skuCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSkuStock()
    {
        return $this->skuStock;
    }

    /**
     * @param boolean $skuStock
     * @return self
     */
    public function setSkuStock($skuStock)
    {
        $this->skuStock = $skuStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getIpmSkuStock()
    {
        return $this->ipmSkuStock;
    }

    /**
     * @param int $ipmSkuStock
     * @return self
     */
    public function setIpmSkuStock($ipmSkuStock)
    {
        $this->ipmSkuStock = $ipmSkuStock;
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
     * @param string $skuPrice
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}