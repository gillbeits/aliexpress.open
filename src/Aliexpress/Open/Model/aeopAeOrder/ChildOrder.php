<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 10:58
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class ChildOrder {

    use ExtendProperties;

    /** @var  int */
    protected $lotNum;
    /** @var  string */
    protected $productAttributes;
    /** @var  string */
    protected $orderStatus;
    /** @var  string */
    protected $productUnit;
    /** @var  string */
    protected $skuCode;
    /** @var  int */
    protected $productId;
    /** @var  int */
    protected $id;
    /** @var  string */
    protected $frozenStatus;
    /** @var  string */
    protected $issueStatus;
    /** @var  int */
    protected $productCount;
    /** @var  string */
    protected $fundStatus;
    /** @var  ModelAmount */
    protected $initOrderAmt;
    /** @var  ModelAmount */
    protected $productPrice;
    /** @var  string */
    protected $productName;

    /**
     * @return int
     */
    public function getLotNum()
    {
        return $this->lotNum;
    }

    /**
     * @param int $lotNum
     */
    public function setLotNum($lotNum)
    {
        $this->lotNum = $lotNum;
    }

    /**
     * @return string
     */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    /**
     * @param string $productAttributes
     */
    public function setProductAttributes($productAttributes)
    {
        $this->productAttributes = $productAttributes;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * @param string $productUnit
     */
    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;
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
     */
    public function setSkuCode($skuCode)
    {
        $this->skuCode = $skuCode;
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFrozenStatus()
    {
        return $this->frozenStatus;
    }

    /**
     * @param string $frozenStatus
     */
    public function setFrozenStatus($frozenStatus)
    {
        $this->frozenStatus = $frozenStatus;
    }

    /**
     * @return string
     */
    public function getIssueStatus()
    {
        return $this->issueStatus;
    }

    /**
     * @param string $issueStatus
     */
    public function setIssueStatus($issueStatus)
    {
        $this->issueStatus = $issueStatus;
    }

    /**
     * @return int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
    }

    /**
     * @return string
     */
    public function getFundStatus()
    {
        return $this->fundStatus;
    }

    /**
     * @param string $fundStatus
     */
    public function setFundStatus($fundStatus)
    {
        $this->fundStatus = $fundStatus;
    }

    /**
     * @return ModelAmount
     */
    public function getInitOrderAmt()
    {
        return $this->initOrderAmt;
    }

    /**
     * @param ModelAmount $initOrderAmt
     */
    public function setInitOrderAmt($initOrderAmt)
    {
        $this->initOrderAmt = $initOrderAmt;
    }

    /**
     * @return ModelAmount
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param ModelAmount $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
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


}