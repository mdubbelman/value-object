<?php

namespace tests\BluebirdDay\ValueObject\Date;

use BluebirdDay\ValueObject\Date\CreatedAt;
use PHPUnit\Framework\TestCase;

class CreatedAtTest extends TestCase
{
    public function testCanBeCreatedFromValidString()
    {
        $this->assertInstanceOf(
            CreatedAt::class,
            CreatedAt::fromValue('2019-05-04')
        );
    }

    public function testCanNotBeCreatedFromInvalidCreatedAt()
    {
        $this->expectException(\InvalidArgumentException::class);
        CreatedAt::fromValue('pass');
    }
}
