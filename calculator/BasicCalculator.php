<?php
namespace Calculator;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(
    shortName: 'BasicCalculator',
    operations: [
        new Get('/calculator', provider: BasicCalculator::class),
        new GetCollection('/calculator', provider: BasicCalculator::class),
    ],
    normalizationContext: [
        'skip_null_values' => false,
    ],
)]
#[SomeAttribute(
    parameter: BasicCalculator::class,
    anotherParam: new SomeNestedAttribute(
        parameter: [
            new SomeNestedAttribute([
                SomeEnum::VALUE->value => BasicCalculator::class,
                SomeEnum::VALUE->value => BasicCalculator::class,
            ])
        ]
    ),
    yetAnotherParam: SomeEnum::VALUE->value,
    arrayParam: [
        SomeEnum::VALUE->value => BasicCalculator::class,
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
