<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 10:46
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class OrderMsg {

    use ExtendProperties;

    /** @var  int */
    protected $orderId;

    /** @var  string */
    protected $gmtCreate;

    /** @var  string */
    protected $receiverLoginId;

    /** @var  string */
    protected $content;

    /** @var  string */
    protected $senderName;

    /** @var  string */
    protected $senderLoginId;

    /** @var  string */
    protected $receiverName;

    /** @var  bool */
    protected $isRead;

    /** @var  bool */
    protected $haveFile;

    /** @var  string */
    protected $fileUrl;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $orderUrl;

    /** @var  int */
    protected $typeId;

    /** @var  int */
    protected $productId;

    /** @var  string */
    protected $productName;

    /** @var  string */
    protected $productUrl;

    /** @var  int */
    protected $relationId;

    /** @var  string */
    protected $messageType;

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
    public function getReceiverLoginId()
    {
        return $this->receiverLoginId;
    }

    /**
     * @param string $receiverLoginId
     */
    public function setReceiverLoginId($receiverLoginId)
    {
        $this->receiverLoginId = $receiverLoginId;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderLoginId()
    {
        return $this->senderLoginId;
    }

    /**
     * @param string $senderLoginId
     */
    public function setSenderLoginId($senderLoginId)
    {
        $this->senderLoginId = $senderLoginId;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return boolean
     */
    public function isIsRead()
    {
        return $this->isRead;
    }

    /**
     * @param boolean $isRead
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;
    }

    /**
     * @return boolean
     */
    public function isHaveFile()
    {
        return $this->haveFile;
    }

    /**
     * @param boolean $haveFile
     */
    public function setHaveFile($haveFile)
    {
        $this->haveFile = $haveFile;
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    /**
     * @param string $fileUrl
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
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
    public function getOrderUrl()
    {
        return $this->orderUrl;
    }

    /**
     * @param string $orderUrl
     */
    public function setOrderUrl($orderUrl)
    {
        $this->orderUrl = $orderUrl;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
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
     * @return string
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @param string $productUrl
     */
    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
    }

    /**
     * @return int
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * @param int $relationId
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

}