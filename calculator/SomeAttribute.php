<?php

declare(strict_types=1);

namespace Calculator;

use Attribute;

#[Attribute]
class SomeAttribute
{
    private StringWrapper $wrapped;

    public function __construct(
        private string $parameter,
        private ?SomeNestedAttribute $anotherParam,
        private string $yetAnotherParam,
        private array $arrayParam,
    ) {
        if ($this->anotherParam === $this->yetAnotherParam) {
            throw new \InvalidArgumentException('Another param and yet another param cannot be the same');
        }

        $this->wrapped = new StringWrapper($this->parameter);
    }
}