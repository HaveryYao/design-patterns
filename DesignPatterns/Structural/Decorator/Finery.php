<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Finery extends Person
{
    protected Person $component;

    public function decorate(Person $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        if(isset($this->component)){
            $this->component->show();
        }
    }
}