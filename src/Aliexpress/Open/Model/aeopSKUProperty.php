<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 13:58
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Ornamental\ExtendProperties;
use Aliexpress\Open\Ornamental\ListItem;

final class aeopSKUProperty
{
    use ExtendProperties, ListItem;

    /** @var  int */
    private $skuPropertyId;
    /** @var  int */
    private $propertyValueId;
    /** @var  string */
    private $propertyValueDefinitionName;
    /** @var  string */
    private $skuImage;

    /**
     * @return int
     */
    public function getSkuPropertyId()
    {
        return $this->skuPropertyId;
    }

    /**
     * @param int $skuPropertyId
     * @return self
     */
    public function setSkuPropertyId($skuPropertyId)
    {
        $this->skuPropertyId = $skuPropertyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyValueId()
    {
        return $this->propertyValueId;
    }

    /**
     * @param int $propertyValueId
     * @return self
     */
    public function setPropertyValueId($propertyValueId)
    {
        $this->propertyValueId = $propertyValueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyValueDefinitionName()
    {
        return $this->propertyValueDefinitionName;
    }

    /**
     * @param string $propertyValueDefinitionName
     * @return self
     */
    public function setPropertyValueDefinitionName($propertyValueDefinitionName)
    {
        $this->propertyValueDefinitionName = $propertyValueDefinitionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuImage()
    {
        return $this->skuImage;
    }

    /**
     * @param string $skuImage
     * @return self
     */
    public function setSkuImage($skuImage)
    {
        $this->skuImage = $skuImage;
        return $this;
    }
}