<?php

namespace tests\BluebirdDay\ValueObject\String;

use BluebirdDay\ValueObject\String\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testCanBeCreatedFromValidText()
    {
        $this->assertInstanceOf(
            Text::class,
            Text::fromString('My custom text')
        );
    }

    public function testCanNotBeCreatedFromInvalidText()
    {
        $this->expectException(\InvalidArgumentException::class);
        Text::fromString(123);
    }
}
