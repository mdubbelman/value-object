<?php

namespace tests\BluebirdDay\ValueObject\Date;

use BluebirdDay\ValueObject\Date\DateTime;
use PHPUnit\Framework\TestCase;

class DateTimeTest extends TestCase
{
    public function testCanBeCreatedFromValidString()
    {
        $this->assertInstanceOf(
            DateTime::class,
            DateTime::fromValue('2019-06-03')
        );
    }

    public function testCanNotBeCreatedFromInvalidDateTime()
    {
        $this->expectException(\InvalidArgumentException::class);
        DateTime::fromValue('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            '2016-06-06 00:00:00',
            (string) DateTime::fromValue('2016-06-06')
        );
    }
}
