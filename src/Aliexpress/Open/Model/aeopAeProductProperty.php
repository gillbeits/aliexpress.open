<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 17:59
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Ornamental\ExtendProperties;
use Aliexpress\Open\Ornamental\ListItem;

final class aeopAeProductProperty
{
    use ExtendProperties, ListItem;

    /** @var  int */
    private $attrNameId;
    /** @var  string */
    private $attrName;
    /** @var  int */
    private $attrValueId;
    /** @var  string */
    private $attrValue;

    /**
     * @return int
     */
    public function getAttrNameId()
    {
        return $this->attrNameId;
    }

    /**
     * @param int $attrNameId
     * @return self
     */
    public function setAttrNameId($attrNameId)
    {
        $this->attrNameId = $attrNameId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttrName()
    {
        return $this->attrName;
    }

    /**
     * @param string $attrName
     * @return self
     */
    public function setAttrName($attrName)
    {
        $this->attrName = $attrName;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttrValueId()
    {
        return $this->attrValueId;
    }

    /**
     * @param int $attrValueId
     * @return self
     */
    public function setAttrValueId($attrValueId)
    {
        $this->attrValueId = $attrValueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttrValue()
    {
        return $this->attrValue;
    }

    /**
     * @param string $attrValue
     * @return self
     */
    public function setAttrValue($attrValue)
    {
        $this->attrValue = $attrValue;
        return $this;
    }
}