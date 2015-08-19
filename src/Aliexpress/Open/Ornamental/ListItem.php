<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 18.08.15
 * Time: 18:03
 */

namespace Aliexpress\Open\Ornamental;


trait ListItem
{
    public function toArray()
    {
        if (null === $this->reflection) {
            $this->reflection = new \ReflectionClass($this);
        }
        $data = [];
        foreach ($this->reflection->getProperties(\ReflectionProperty::IS_PRIVATE) as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($this);
            if (null === $value) continue;
            if (is_object($value) && method_exists($value, 'toArray')) {
                $value = $value->toArray();
            }
            $data[$property->getName()] = $value;
        }
        return $data;
    }
}