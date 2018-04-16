<?php

namespace tests\BluebirdDay\ValueObject\String;

use BluebirdDay\ValueObject\String\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@domain.com')
        );
    }

    public function testCanNotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(\InvalidArgumentException::class);
        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@domain.com',
            Email::fromString('user@domain.com')
        );
    }
}
