<?php
namespace Calculator;

#[SomeAttribute(
    parameter: SomeEnum::VALUE->value,
    anotherParam: new SomeNestedAttribute('nested value'),
    yetAnotherParam: BasicCalculator::class,
    arrayParam: [
        SomeEnum::VALUE->value => BasicCalculator::class,
    ],
)]
class BasicCalculator
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
