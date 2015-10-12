<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 12:03
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class LoanInfo {

    use ExtendProperties;

    /** @var  ModelAmount */
    protected $loanAmount;

    /**
     * @return ModelAmount
     */
    public function getLoanAmount()
    {
        return $this->loanAmount;
    }

    /**
     * @param ModelAmount $loanAmount
     */
    public function setLoanAmount($loanAmount)
    {
        $this->loanAmount = $loanAmount;
    }

}