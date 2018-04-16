<?php

namespace tests\BluebirdDay\ValueObject\Number;

use BluebirdDay\ValueObject\Number\Integer;
use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    public function testCanBeCreatedFromValidInteger()
    {
        $this->assertInstanceOf(
            Integer::class,
            Integer::fromValue(123)
        );
    }

    public function testCanNotBeCreatedFromInvalidInteger()
    {
        $this->expectException(\TypeError::class);
        Integer::fromValue('invalid');
    }

    public function testCanBeUsedAsInteger()
    {
        $this->assertEquals(
            123,
            Integer::fromValue(123)->getValue()
        );
    }
}
