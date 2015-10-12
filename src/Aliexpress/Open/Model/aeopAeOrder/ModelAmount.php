<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 11:25
 */

namespace Aliexpress\Open\Model\aeopAeOrder;


use Aliexpress\Open\Ornamental\ExtendProperties;

class ModelAmount {

    use ExtendProperties;

    /** @var  float */
    protected $amount;

    /** @var  int */
    protected $cent;

    /** @var  string */
    protected $currencyCode;

    /** @var  int */
    protected $centFactor;

    /** @var  Currency */
    protected $currency;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getCent()
    {
        return $this->cent;
    }

    /**
     * @param int $cent
     */
    public function setCent($cent)
    {
        $this->cent = $cent;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return int
     */
    public function getCentFactor()
    {
        return $this->centFactor;
    }

    /**
     * @param int $centFactor
     */
    public function setCentFactor($centFactor)
    {
        $this->centFactor = $centFactor;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

}