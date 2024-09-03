<?php

declare(strict_types=1);

namespace Calculator;

use Attribute;

#[Attribute]
class SomeAttribute
{
    public function __construct(
        private string $parameter,
        private ?SomeNestedAttribute $anotherParam,
        private string $yetAnotherParam,
    ){
    }
}