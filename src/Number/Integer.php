<?php
namespace BluebirdDay\ValueObject\Number;

use Assert\Assertion;
use BluebirdDay\ValueObject\AbstractValueObject;

class Integer extends AbstractValueObject
{

    /**
     * @param int $int
     *
     * @throws \Assert\AssertionFailedException
     */
    public function __construct(int $int)
    {
        Assertion::integer($int);
        parent::__construct($int);
    }

    public function __toString()
    {
        return (string) $this->int;
    }
}
