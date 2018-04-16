<?php

namespace tests\BluebirdDay\ValueObject\String;

use BluebirdDay\ValueObject\String\Password;
use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase
{
    public function testCanBeCreatedFromValidPassword()
    {
        $this->assertInstanceOf(
            Password::class,
            Password::fromString('Welcome123')
        );
    }

    public function testCanNotBeCreatedFromInvalidPassword()
    {
        $this->expectException(\InvalidArgumentException::class);
        Password::fromString('pass');
    }
}
