<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 09.10.15
 * Time: 16:53
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Model\aeopAeOrder\BuyerInfo;
use Aliexpress\Open\Model\aeopAeOrder\ChildOrder;
use Aliexpress\Open\Model\aeopAeOrder\ChildOrderExtInfo;
use Aliexpress\Open\Model\aeopAeOrder\ChildOrderExtInfoList;
use Aliexpress\Open\Model\aeopAeOrder\ChildOrderList;
use Aliexpress\Open\Model\aeopAeOrder\IssueInfo;
use Aliexpress\Open\Model\aeopAeOrder\LoanInfo;
use Aliexpress\Open\Model\aeopAeOrder\LogisticInfo;
use Aliexpress\Open\Model\aeopAeOrder\LogisticInfoList;
use Aliexpress\Open\Model\aeopAeOrder\ModelAmount;
use Aliexpress\Open\Model\aeopAeOrder\OprLogDto;
use Aliexpress\Open\Model\aeopAeOrder\OprLogDtoList;
use Aliexpress\Open\Model\aeopAeOrder\OrderMsg;
use Aliexpress\Open\Model\aeopAeOrder\OrderMsgList;
use Aliexpress\Open\Model\aeopAeOrder\ReceiptAddress;
use Aliexpress\Open\Ornamental\ExtendProperties;

class aeopAeOrder {

    use ExtendProperties;

    const STATUS_PLACE_ORDER_SUCCESS = "PLACE_ORDER_SUCCESS";
    const STATUS_IN_CANCEL = "IN_CANCEL";
    const STATUS_WAIT_SELLER_SEND_GOODS = "WAIT_SELLER_SEND_GOODS";
    const STATUS_SELLER_PART_SEND_GOODS = "SELLER_PART_SEND_GOODS";
    const STATUS_WAIT_BUYER_ACCEPT_GOODS = "WAIT_BUYER_ACCEPT_GOODS";
    const STATUS_FUND_PROCESSING = "FUND_PROCESSING";
    const STATUS_FINISH = "FINISH";
    const STATUS_IN_ISSUE = "IN_ISSUE";
    const STATUS_IN_FROZEN = "IN_FROZEN";
    const STATUS_WAIT_SELLER_EXAMINE_MONEY = "WAIT_SELLER_EXAMINE_MONEY";
    const STATUS_RISK_CONTROL = "RISK_CONTROL";

    /** @var  ReceiptAddress */
    protected $receiptAddress;

    /** @var  string */
    protected $gmtModified;

    /** @var  BuyerInfo */
    protected $buyerInfo;

    /** @var  string */
    protected $gmtTradeEnd;

    /** @var  bool */
    protected $phone;

    /** @var  string */
    protected $buyerloginid;

    /** @var  bool */
    protected $isPhone;

    /** @var  ModelAmount */
    protected $logisticsAmount;

    /** @var  ChildOrderExtInfoList|ChildOrderExtInfo[]  */
    protected $childOrderExtInfoList;

    /** @var  OrderMsgList|OrderMsg[] */
    protected $orderMsgList;

    /** @var  IssueInfo */
    protected $issueInfo;

    /** @var  LogisticInfoList|LogisticInfo[] */
    protected $logisticInfoList;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $issueStatus;

    /** @var  string */
    protected $frozenStatus;

    /** @var  string */
    protected $logisticsStatus;

    /** @var  ModelAmount */
    protected $orderAmount;

    /** @var  string */
    protected $sellerSignerFullname;

    /** @var  ModelAmount */
    protected $initOderAmount;

    /** @var  OprLogDtoList|OprLogDto[] */
    protected $oprLogDtoList;

    /** @var  ChildOrderList|ChildOrder[] */
    protected $childOrderList;

    /** @var  string */
    protected $gmtCreate;

    /** @var  string */
    protected $sellerOperatorLoginId;

    /** @var  string */
    protected $paymentType;

    /** @var  LoanInfo */
    protected $loanInfo;

    /** @var  string */
    protected $orderStatus;

    /** @var  string */
    protected $buyerSignerFullname;

    /** @var  string */
    protected $gmtPaySuccess;

    /** @var  string */
    protected $loanStatus;

    /** @var  string */
    protected $fundStatus;

    /** @var  RefundInfo */
    protected $refundInfo;

    /** @var  ModelAmount */
    protected $escrowFee;

    /** @var  string */
    protected $sellerOperatorAliidloginid;

    /**
     * @return string
     */
    public function getSellerOperatorAliidloginid()
    {
        return $this->sellerOperatorAliidloginid;
    }

    /**
     * @param string $sellerOperatorAliidloginid
     */
    public function setSellerOperatorAliidloginid($sellerOperatorAliidloginid)
    {
        $this->sellerOperatorAliidloginid = $sellerOperatorAliidloginid;
    }

    /**
     * @return RefundInfo
     */
    public function getRefundInfo()
    {
        return $this->refundInfo;
    }

    /**
     * @param RefundInfo $refundInfo
     */
    public function setRefundInfo($refundInfo)
    {
        $this->refundInfo = $refundInfo;
    }

    /**
     * @return ModelAmount
     */
    public function getEscrowFee()
    {
        return $this->escrowFee;
    }

    /**
     * @param ModelAmount $escrowFee
     */
    public function setEscrowFee($escrowFee)
    {
        $this->escrowFee = $escrowFee;
    }

    /**
     * @return ReceiptAddress
     */
    public function getReceiptAddress()
    {
        return $this->receiptAddress;
    }

    /**
     * @param ReceiptAddress $receiptAddress
     */
    public function setReceiptAddress($receiptAddress)
    {
        $this->receiptAddress = new ReceiptAddress($receiptAddress);
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
     * @return BuyerInfo
     */
    public function getBuyerInfo()
    {
        return $this->buyerInfo;
    }

    /**
     * @param BuyerInfo $buyerInfo
     */
    public function setBuyerInfo($buyerInfo)
    {
        $this->buyerInfo = $buyerInfo;
    }

    /**
     * @return string
     */
    public function getGmtTradeEnd()
    {
        return $this->gmtTradeEnd;
    }

    /**
     * @param string $gmtTradeEnd
     */
    public function setGmtTradeEnd($gmtTradeEnd)
    {
        $this->gmtTradeEnd = $gmtTradeEnd;
    }

    /**
     * @return boolean
     */
    public function isPhone()
    {
        return $this->phone;
    }

    /**
     * @param boolean $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getBuyerloginid()
    {
        return $this->buyerloginid;
    }

    /**
     * @param string $buyerloginid
     */
    public function setBuyerloginid($buyerloginid)
    {
        $this->buyerloginid = $buyerloginid;
    }

    /**
     * @return boolean
     */
    public function isIsPhone()
    {
        return $this->isPhone;
    }

    /**
     * @param boolean $isPhone
     */
    public function setIsPhone($isPhone)
    {
        $this->isPhone = $isPhone;
    }

    /**
     * @return ModelAmount
     */
    public function getLogisticsAmount()
    {
        return $this->logisticsAmount;
    }

    /**
     * @param ModelAmount $logisticsAmount
     */
    public function setLogisticsAmount($logisticsAmount)
    {
        $this->logisticsAmount = $logisticsAmount;
    }

    /**
     * @return aeopAeOrder\ChildOrderExtInfo[]|ChildOrderExtInfoList
     */
    public function getChildOrderExtInfoList()
    {
        return $this->childOrderExtInfoList;
    }

    /**
     * @param aeopAeOrder\ChildOrderExtInfo[]|ChildOrderExtInfoList $childOrderExtInfoList
     */
    public function setChildOrderExtInfoList($childOrderExtInfoList)
    {
        foreach ($childOrderExtInfoList as $childOrderExtInfo) {
            $this->addChildOrderExtInfo(new ChildOrderExtInfo($childOrderExtInfo));
        }
    }

    /**
     * @param ChildOrderExtInfo $childOrderExtInfo
     * @return $this
     */
    public function addChildOrderExtInfo(ChildOrderExtInfo $childOrderExtInfo)
    {
        if (! $this->childOrderExtInfoList instanceof ChildOrderExtInfoList) $this->childOrderExtInfoList = new ChildOrderExtInfoList();
        $this->childOrderExtInfoList->add($childOrderExtInfo);
        return $this;
    }

    /**
     * @return aeopAeOrder\OrderMsg[]|OrderMsgList
     */
    public function getOrderMsgList()
    {
        return $this->orderMsgList;
    }

    /**
     * @param aeopAeOrder\OrderMsg[]|OrderMsgList $orderMsgList
     */
    public function setOrderMsgList($orderMsgList)
    {
        foreach ($orderMsgList as $orderMsg) {
            $this->addOrderMsg(new OrderMsg($orderMsg));
        }
    }

    /**
     * @param OrderMsg $orderMsg
     * @return $this
     */
    public function addOrderMsg(OrderMsg $orderMsg)
    {
        if (! $this->orderMsgList instanceof OrderMsgList) $this->orderMsgList = new OrderMsgList();
        $this->orderMsgList->add($orderMsg);
        return $this;
    }

    /**
     * @return IssueInfo
     */
    public function getIssueInfo()
    {
        return $this->issueInfo;
    }

    /**
     * @param IssueInfo $issueInfo
     */
    public function setIssueInfo($issueInfo)
    {
        $this->issueInfo = $issueInfo;
    }

    /**
     * @return aeopAeOrder\LogisticInfo[]|LogisticInfoList
     */
    public function getLogisticInfoList()
    {
        return $this->logisticInfoList;
    }

    /**
     * @param aeopAeOrder\LogisticInfo[]|LogisticInfoList $logisticInfoList
     */
    public function setLogisticInfoList($logisticInfoList)
    {
        foreach ($logisticInfoList as $logisticInfo) {
            $this->addLogisticInfo(new LogisticInfo($logisticInfo));
        }
    }

    /**
     * @param LogisticInfo $logisticInfo
     * @return $this
     */
    public function addLogisticInfo(LogisticInfo $logisticInfo)
    {
        if (! $this->logisticInfoList instanceof LogisticInfoList) $this->logisticInfoList = new LogisticInfoList();
        $this->logisticInfoList->add($logisticInfo);
        return $this;
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
    public function getLogisticsStatus()
    {
        return $this->logisticsStatus;
    }

    /**
     * @param string $logisticsStatus
     */
    public function setLogisticsStatus($logisticsStatus)
    {
        $this->logisticsStatus = $logisticsStatus;
    }

    /**
     * @return ModelAmount
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param ModelAmount $orderAmount
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return string
     */
    public function getSellerSignerFullname()
    {
        return $this->sellerSignerFullname;
    }

    /**
     * @param string $sellerSignerFullname
     */
    public function setSellerSignerFullname($sellerSignerFullname)
    {
        $this->sellerSignerFullname = $sellerSignerFullname;
    }

    /**
     * @return ModelAmount
     */
    public function getInitOderAmount()
    {
        return $this->initOderAmount;
    }

    /**
     * @param ModelAmount $initOderAmount
     */
    public function setInitOderAmount($initOderAmount)
    {
        $this->initOderAmount = $initOderAmount;
    }

    /**
     * @return aeopAeOrder\OprLogDto[]|OprLogDtoList
     */
    public function getOprLogDtoList()
    {
        return $this->oprLogDtoList;
    }

    /**
     * @param aeopAeOrder\OprLogDto[]|OprLogDtoList $oprLogDtoList
     */
    public function setOprLogDtoList($oprLogDtoList)
    {
        foreach ($oprLogDtoList as $oprLogDto) {
            $this->addOprLogDto(new OprLogDto($oprLogDto));
        }
    }

    /**
     * @param OprLogDto $oprLogDto
     * @return $this
     */
    public function addOprLogDto(OprLogDto $oprLogDto)
    {
        if (! $this->oprLogDtoList instanceof OprLogDtoList) $this->oprLogDtoList = new OprLogDtoList();
        $this->oprLogDtoList->add($oprLogDto);
        return $this;
    }

    /**
     * @return aeopAeOrder\ChildOrder[]|ChildOrderList
     */
    public function getChildOrderList()
    {
        return $this->childOrderList;
    }

    /**
     * @param aeopAeOrder\ChildOrder[]|ChildOrderList $childOrderList
     */
    public function setChildOrderList($childOrderList)
    {
        foreach ($childOrderList as $childOrder) {
            $this->addChildOrder(new ChildOrder($childOrder));
        }
    }

    /**
     * @param ChildOrder $childOrder
     * @return $this
     */
    protected function addChildOrder(ChildOrder $childOrder)
    {
        if (! $this->childOrderList instanceof ChildOrderList) $this->childOrderList = new ChildOrderList();
        $this->childOrderList->add($childOrder);
        return $this;
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
    public function getSellerOperatorLoginId()
    {
        return $this->sellerOperatorLoginId;
    }

    /**
     * @param string $sellerOperatorLoginId
     */
    public function setSellerOperatorLoginId($sellerOperatorLoginId)
    {
        $this->sellerOperatorLoginId = $sellerOperatorLoginId;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return LoanInfo
     */
    public function getLoanInfo()
    {
        return $this->loanInfo;
    }

    /**
     * @param LoanInfo $loanInfo
     */
    public function setLoanInfo($loanInfo)
    {
        $this->loanInfo = $loanInfo;
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
    public function getBuyerSignerFullname()
    {
        return $this->buyerSignerFullname;
    }

    /**
     * @param string $buyerSignerFullname
     */
    public function setBuyerSignerFullname($buyerSignerFullname)
    {
        $this->buyerSignerFullname = $buyerSignerFullname;
    }

    /**
     * @return string
     */
    public function getGmtPaySuccess()
    {
        return $this->gmtPaySuccess;
    }

    /**
     * @param string $gmtPaySuccess
     */
    public function setGmtPaySuccess($gmtPaySuccess)
    {
        $this->gmtPaySuccess = $gmtPaySuccess;
    }

    /**
     * @return string
     */
    public function getLoanStatus()
    {
        return $this->loanStatus;
    }

    /**
     * @param string $loanStatus
     */
    public function setLoanStatus($loanStatus)
    {
        $this->loanStatus = $loanStatus;
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


}