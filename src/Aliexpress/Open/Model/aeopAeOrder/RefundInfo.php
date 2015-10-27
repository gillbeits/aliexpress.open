<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 27.10.15
 * Time: 15:12
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class RefundInfo {
    use ExtendProperties;

    /** @var  string */
    protected $refundReason;

    /** @var  string */
    protected $refundStatus;

    /** @var  string */
    protected $refundType;

    /**
     * @return string
     */
    public function getRefundReason()
    {
        return $this->refundReason;
    }

    /**
     * @param string $refundReason
     */
    public function setRefundReason($refundReason)
    {
        $this->refundReason = $refundReason;
    }

    /**
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return string
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * @param string $refundType
     */
    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
    }
}