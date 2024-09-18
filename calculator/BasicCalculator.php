<?php

declare(strict_types=1);

namespace Calculator;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Put;

#[ApiResource(
    shortName: 'BasicCalculator',
    operations: [
        new Get('/calculator', provider: BasicCalculator::class),
        new GetCollection('/calculator', provider: BasicCalculator::class),
        new Put(
            filters: [
                SomeEnum::class,
                SomeAttribute::class,
            ],
            provider: BasicCalculator::class,
            processor: BasicCalculator::class,
            allowCreate: true,
        ),
    ],
    normalizationContext: [
        'skip_null_values' => false,
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
