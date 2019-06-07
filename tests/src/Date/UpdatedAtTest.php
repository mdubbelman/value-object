<?php

namespace tests\BluebirdDay\ValueObject\Date;

use BluebirdDay\ValueObject\Date\UpdatedAt;
use PHPUnit\Framework\TestCase;

class UpdatedAtTest extends TestCase
{
    public function testCanBeCreatedFromValidString()
    {
        $this->assertInstanceOf(
            UpdatedAt::class,
            UpdatedAt::fromValue('1950-03-23')
        );
    }

    public function testCanNotBeCreatedFromInvalidString()
    {
        $this->expectException(\InvalidArgumentException::class);
        UpdatedAt::fromValue(123);
    }
}
