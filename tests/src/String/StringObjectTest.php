<?php

namespace tests\BluebirdDay\ValueObject\String;

use BluebirdDay\ValueObject\String\StringObject;
use PHPUnit\Framework\TestCase;

class StringObjectTest extends TestCase
{
    public function testCanBeCreatedFromValidString()
    {
        $this->assertInstanceOf(
            StringObject::class,
            StringObject::fromString('My custom string')
        );
    }

    public function testCanNotBeCreatedFromInvalidString()
    {
        $this->expectException(\InvalidArgumentException::class);
        StringObject::fromString(123);
    }
}
