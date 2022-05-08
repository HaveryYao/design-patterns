<?php

namespace DesignPatterns\Creational\Prototype;

use JetBrains\PhpStorm\Pure;

class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}