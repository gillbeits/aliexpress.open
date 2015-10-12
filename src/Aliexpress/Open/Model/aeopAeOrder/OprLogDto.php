<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 10:53
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class OprLogDto {

    use ExtendProperties;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $gmtModified;

    /** @var  string */
    protected $gmtCreate;

    /** @var  string */
    protected $actionType;

    /** @var  int */
    protected $childOrderId;

    /** @var  string */
    protected $operator;

    /** @var  int */
    protected $orderId;

    /** @var  OprLogDtoMemo */
    protected $memo;

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
    public function getGmtModified()
    {
        return $this->gmtModified;
    }

    /**
     * @param string $gmtModified
     */
    public function setGmtModified($gmtModified)
    {
        $this->gmtModified = $gmtModified;
    }

    /**
     * @return string
     */
    public function getGmtCreate()
    {
        return $this->gmtCreate;
    }

    /**
     * @param string $gmtCreate
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->gmtCreate = $gmtCreate;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param string $actionType
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
    }

    /**
     * @return int
     */
    public function getChildOrderId()
    {
        return $this->childOrderId;
    }

    /**
     * @param int $childOrderId
     */
    public function setChildOrderId($childOrderId)
    {
        $this->childOrderId = $childOrderId;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return OprLogDtoMemo
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param OprLogDtoMemo $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->memo = new OprLogDtoMemo(json_decode($memo));
        return $this;
    }

}