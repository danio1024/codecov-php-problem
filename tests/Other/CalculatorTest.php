<?php

namespace Calculator\Tests\Other;

use Calculator\OtherBasicCalculator;
use PHPUnit;

/**
 * @covers \Calculator\OtherBasicCalculator
 */
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $this->assertEquals(3.0, OtherBasicCalculator::add(1, 2));
        $this->assertEquals(3.0, OtherBasicCalculator::add(1.0, 2.0));
        $this->assertEquals(2.0, OtherBasicCalculator::add(0, 2.0));
        $this->assertEquals(2.0, OtherBasicCalculator::add(2.0, 0));
        $this->assertEquals(-2.0, OtherBasicCalculator::add(-4, 2.0));
    }

    public function testSubtract()
    {
        $this->assertEquals(-1.0, OtherBasicCalculator::subtract(1, 2));
        $this->assertEquals(1.0, OtherBasicCalculator::subtract(2, 1));
        $this->assertEquals(-1.0, OtherBasicCalculator::subtract(1.0, 2.0));
        $this->assertEquals(-2.0, OtherBasicCalculator::subtract(0, 2.0));
        $this->assertEquals(2.0, OtherBasicCalculator::subtract(2.0, 0));
        $this->assertEquals(-6.0, OtherBasicCalculator::subtract(-4, 2.0));
    }

    public function testMultiply()
    {
        $this->assertEquals(2.0, OtherBasicCalculator::multiply(1, 2));
        $this->assertEquals(2.0, OtherBasicCalculator::multiply(1.0, 2.0));
        $this->assertEquals(0.0, OtherBasicCalculator::multiply(0, 2.0));
        $this->assertEquals(0.0, OtherBasicCalculator::multiply(2.0, 0));
        $this->assertEquals(-8.0, OtherBasicCalculator::multiply(-4, 2.0));
    }

    public function testDivide()
    {
        $this->assertEquals(0.5, OtherBasicCalculator::divide(1, 2));
        $this->assertEquals(0.5, OtherBasicCalculator::divide(1.0, 2.0));
        $this->assertEquals(0.0, OtherBasicCalculator::divide(0, 2.0));
        $this->assertEquals(-2.0, OtherBasicCalculator::divide(-4, 2.0));
        $this->assertEquals('Cannot divide by 0', OtherBasicCalculator::divide(2.0, 0));
    }
}
