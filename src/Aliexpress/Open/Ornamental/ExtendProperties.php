<?php

namespace Aliexpress\Open\Ornamental;

trait ExtendProperties
{
    protected $reflection;

    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        if (is_array($options)) {
            foreach ($options as $field => $value) {
                $this->__set($field, $value);
            }
        } elseif (is_object($options)) {
            $reflection = new \ReflectionObject($options);
            foreach ($reflection->getProperties() as $property) {
                $property->setAccessible(true);
                $this->__set($property->getName(), $property->getValue($options));
            }
        }
        $this->reflection = new \ReflectionObject($this);
    }

    /**
     * @return \ReflectionObject
     */
    public function getReflection()
    {
        return $this->reflection;
    }

    /**
     * @param $field
     * @return string
     */
    private function camelize($field)
    {
        return strtr(ucwords(strtr($field, array('_' => ' ', '.' => '_ '))), array(' ' => ''));
    }

    public function __get($name)
    {
        if (property_exists($this, $name))
            return $this->$name;
    }

    public function __set($name, $value)
    {
        if (method_exists($this, $setter = "set" . $this->camelize($name))) {
            call_user_func_array([$this, $setter], [$value]);
        } elseif (($property = new \ReflectionProperty($this, $name))) {
            $property->setAccessible(true);
            $property->setValue($this, $value);
        }
    }
}