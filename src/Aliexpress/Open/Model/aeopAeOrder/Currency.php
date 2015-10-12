<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 12.10.15
 * Time: 9:21
 */

namespace Aliexpress\Open\Model\aeopAeOrder;



use Aliexpress\Open\Ornamental\ExtendProperties;

class Currency {

    use ExtendProperties;

    /** @var  int */
    protected $defaultFractionDigits;

    /** @var  string */
    protected $currencyCode;

    /** @var  string */
    protected $symbol;

    /**
     * @return int
     */
    public function getDefaultFractionDigits()
    {
        return $this->defaultFractionDigits;
    }

    /**
     * @param int $defaultFractionDigits
     */
    public function setDefaultFractionDigits($defaultFractionDigits)
    {
        $this->defaultFractionDigits = $defaultFractionDigits;
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
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }
}