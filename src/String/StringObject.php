<?php
namespace BluebirdDay\ValueObject\String;

use Assert\Assertion;
use BluebirdDay\ValueObject\AbstractValueObject;

class StringObject extends AbstractValueObject
{
    /**
     * @param string $string
     *
     * @throws \Assert\AssertionFailedException
     */
    public function __construct($string)
    {
        Assertion::string($string);
        parent::__construct($string);
    }

    public static function fromString($string)
    {
        return new static($string);
    }
}
