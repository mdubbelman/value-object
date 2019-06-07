<?php

namespace BluebirdDay\ValueObject\Number;

use Assert\Assertion;
use BluebirdDay\ValueObject\AbstractValueObject;

class CartQuantity extends AbstractValueObject
{

    protected $allowBelowZero;

    public function __construct(int $quantity, bool $allowBelowZero = false)
    {
        if (!$allowBelowZero) {
            Assertion::greaterOrEqualThan($quantity, 0);
        }
        $this->allowBelowZero = $allowBelowZero;
        parent::__construct($quantity);
    }

    public function add(CartQuantity $quantity)
    {
        return new CartQuantity($this->value + $quantity->getValue());
    }

    public function subtract(CartQuantity $quantity)
    {
        $result = $this->value - $quantity->getValue();
        if ($result < 0 && !$this->allowBelowZero) {
            $result = 0;
        }

        return new CartQuantity($result);
    }
}
