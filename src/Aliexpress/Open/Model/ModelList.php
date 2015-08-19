<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 18:07
 */

namespace Aliexpress\Open\Model;


use Doctrine\Common\Collections\ArrayCollection;

class ModelList extends ArrayCollection
{
    /**
     * Returns a string representation of this object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        $data = [];
        /** @var aeopSKUProperty $element */
        foreach (parent::toArray() as $element) {
            $data[] = $element->toArray();
        }
        return $data;
    }
}