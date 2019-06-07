<?php

namespace BluebirdDay\ValueObject\String;

use Assert\Assertion;

class Email extends StringObject
{

    /**
     * @param string $email
     *
     * @throws \Assert\AssertionFailedException
     */
    public function __construct($email)
    {
        Assertion::email($email);

        parent::__construct($email);
    }
}
