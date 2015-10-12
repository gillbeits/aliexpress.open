<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 10:10
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class LogisticInfo {

    use ExtendProperties;

    /** @var  string */
    protected $logisticsTypeCode;

    /** @var  string */
    protected $gmtReceived;

    /** @var  string */
    protected $logisticsNo;

    /** @var  string */
    protected $logisticsServiceName;

    /** @var  string */
    protected $gmtSend;

    /** @var  string */
    protected $receiveStatus;

    /**
     * @return string
     */
    public function getLogisticsTypeCode()
    {
        return $this->logisticsTypeCode;
    }

    /**
     * @param string $logisticsTypeCode
     */
    public function setLogisticsTypeCode($logisticsTypeCode)
    {
        $this->logisticsTypeCode = $logisticsTypeCode;
    }

    /**
     * @return string
     */
    public function getGmtReceived()
    {
        return $this->gmtReceived;
    }

    /**
     * @param string $gmtReceived
     */
    public function setGmtReceived($gmtReceived)
    {
        $this->gmtReceived = $gmtReceived;
    }

    /**
     * @return string
     */
    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    /**
     * @param string $logisticsNo
     */
    public function setLogisticsNo($logisticsNo)
    {
        $this->logisticsNo = $logisticsNo;
    }

    /**
     * @return string
     */
    public function getLogisticsServiceName()
    {
        return $this->logisticsServiceName;
    }

    /**
     * @param string $logisticsServiceName
     */
    public function setLogisticsServiceName($logisticsServiceName)
    {
        $this->logisticsServiceName = $logisticsServiceName;
    }

    /**
     * @return string
     */
    public function getGmtSend()
    {
        return $this->gmtSend;
    }

    /**
     * @param string $gmtSend
     */
    public function setGmtSend($gmtSend)
    {
        $this->gmtSend = $gmtSend;
    }

    /**
     * @return string
     */
    public function getReceiveStatus()
    {
        return $this->receiveStatus;
    }

    /**
     * @param string $receiveStatus
     */
    public function setReceiveStatus($receiveStatus)
    {
        $this->receiveStatus = $receiveStatus;
    }

}