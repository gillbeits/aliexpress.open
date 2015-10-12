<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 11:14
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class IssueInfo {

    use ExtendProperties;

    const ISSUE_STATUS_WAIT_SELLER_CONFIRM_REFUND = 'WAIT_SELLER_CONFIRM_REFUND';
    const ISSUE_STATUS_SELLER_REFUSE_REFUND = 'SELLER_REFUSE_REFUND';
    const ISSUE_STATUS_ACCEPTISSUE = 'ACCEPTISSUE';
    const ISSUE_STATUS_WAIT_BUYER_SEND_GOODS = 'WAIT_BUYER_SEND_GOODS';
    const ISSUE_STATUS_WAIT_SELLER_RECEIVE_GOODS = 'WAIT_SELLER_RECEIVE_GOODS';
    const ISSUE_STATUS_WAIT = 'WAIT';
    const ISSUE_STATUS_ARBITRATING = 'ARBITRATING';
    const ISSUE_STATUS_SELLER_RESPONSE_ISSUE_TIMEOUT = 'SELLER_RESPONSE_ISSUE_TIMEOUT';

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $gmtModified;

    /** @var  string */
    protected $issueStatus;

    /** @var  string */
    protected $gmtCreate;

    /** @var  int */
    protected $parentOrderId;

    /** @var  int */
    protected $orderId;

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
     * @return int
     */
    public function getParentOrderId()
    {
        return $this->parentOrderId;
    }

    /**
     * @param int $parentOrderId
     */
    public function setParentOrderId($parentOrderId)
    {
        $this->parentOrderId = $parentOrderId;
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

}