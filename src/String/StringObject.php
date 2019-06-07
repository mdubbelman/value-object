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

    /**
     * @param $string
     *
     * @return \BluebirdDay\ValueObject\String\StringObject
     * @throws \Assert\AssertionFailedException
     */
    public static function fromString($string)
    {
        return new static($string);
    }
}
