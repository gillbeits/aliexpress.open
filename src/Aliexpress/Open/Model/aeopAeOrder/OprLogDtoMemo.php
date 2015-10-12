<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 13:44
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class OprLogDtoMemo {

    use ExtendProperties;

    protected $apContractId;
    protected $parameterMap;
    protected $parameterNames;
    protected $paymentContractId;
    protected $paymentType;
    protected $receiptNo;
}