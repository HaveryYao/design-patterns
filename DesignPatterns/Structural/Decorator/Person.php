<?php

namespace DesignPatterns\Structural\Decorator;

class Person
{
    private string $name;

    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    public function show()
    {
        print $this->name.'\'s show:';
    }
}