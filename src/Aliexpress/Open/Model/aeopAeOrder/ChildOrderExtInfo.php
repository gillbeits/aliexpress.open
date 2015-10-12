<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 9:56
 */

namespace Aliexpress\Open\Model\aeopAeOrder;



use Aliexpress\Open\Ornamental\ExtendProperties;

class ChildOrderExtInfo {

    use ExtendProperties;

    /** @var  ModelAmount */
    protected $unitPrice;

    /** @var  int */
    protected $quantity;

    /** @var  string */
    protected $sku;

    /** @var  string */
    protected $productName;

    /** @var  int */
    protected $productId;

    /**
     * @return ModelAmount
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param ModelAmount $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

}