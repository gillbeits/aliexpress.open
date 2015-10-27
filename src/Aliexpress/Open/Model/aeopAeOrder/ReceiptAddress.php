<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 09.10.15
 * Time: 17:00
 */

namespace Aliexpress\Open\Model\aeopAeOrder;



use Aliexpress\Open\Ornamental\ExtendProperties;

class ReceiptAddress {

    use ExtendProperties;

    /** @var  string */
    protected $zip;

    /** @var  string */
    protected $phoneNumber;

    /** @var  string */
    protected $province;

    /** @var  string */
    protected $address2;

    /** @var  string */
    protected $phoneArea;

    /** @var  string */
    protected $phoneCountry;

    /** @var  string */
    protected $contactPerson;

    /** @var  string */
    protected $mobileNo;

    /** @var  string */
    protected $city;

    /** @var  string */
    protected $country;

    /** @var  string */
    protected $detailAddress;

    /** @var  string */
    protected $faxArea;

    /**
     * @return string
     */
    public function getFaxArea()
    {
        return $this->faxArea;
    }

    /**
     * @param string $faxArea
     */
    public function setFaxArea($faxArea)
    {
        $this->faxArea = $faxArea;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getPhoneArea()
    {
        return $this->phoneArea;
    }

    /**
     * @param string $phoneArea
     */
    public function setPhoneArea($phoneArea)
    {
        $this->phoneArea = $phoneArea;
    }

    /**
     * @return string
     */
    public function getPhoneCountry()
    {
        return $this->phoneCountry;
    }

    /**
     * @param string $phoneCountry
     */
    public function setPhoneCountry($phoneCountry)
    {
        $this->phoneCountry = $phoneCountry;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * @return string
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * @param string $mobileNo
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param string $detailAddress
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress = $detailAddress;
    }

}