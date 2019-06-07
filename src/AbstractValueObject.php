<?php

namespace BluebirdDay\ValueObject;

abstract class AbstractValueObject
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public static function fromValue($value)
    {
        return new static($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
