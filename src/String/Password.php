<?php

namespace BluebirdDay\ValueObject\String;

use Assert\Assertion;

class Password extends StringObject
{
    public static $minLength = 6;
    public static $maxLength = 64;

    public function __construct($string)
    {
        Assertion::string($string);
        Assertion::minLength(
            $string,
            static::$minLength,
            function ($parameters) {
                return sprintf(
                    'The password should have a minimum length of %s characters',
                    $parameters['minLength']
                );
            }
        );

        Assertion::maxLength(
            $string,
            static::$maxLength,
            function ($parameters) {
                return sprintf(
                    'The password should have a maximum length of %s characters',
                    $parameters['maxLength']
                );
            }
        );
        
        $this->string = $string;
    }
}
