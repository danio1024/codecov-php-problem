<?php

declare(strict_types=1);

namespace Calculator;

#[SomeAttribute('some value', null, 'another value', ['array value'])]
#[SomeAttribute('some value', null, 'another value', ['array value'])]
#[SomeAttribute('some value', null, 'another value', ['array value'])]
#[SomeAttribute('some value', null, 'another value', ['array value'])]
#[SomeAttribute('some value', null, 'another value', ['array value'])]
class OtherBasicCalculator
{
    public static function add(float $x, float $y) {
        return $y + $x;
    }

    public static function subtract(float $x, float $y) {
        return $x - $y;
    }

    public static function multiply(float $x, float $y) {
        return $x * $y;
    }

    public static function divide(float $x, float $y) {
        if ($y == 0) {
            return 'Cannot divide by 0';
        }
        return $x / $y;
    }
}
