<?php

declare(strict_types=1);

namespace Calculator;

use Attribute;

#[Attribute]
class SomeNestedAttribute
{
    public function __construct(
        private string $parameter,
    ){
    }
}