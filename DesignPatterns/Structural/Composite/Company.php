<?php

namespace DesignPatterns\Structural\Composite;

abstract class Company
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function add(Company $company): void;

    public abstract function remove(Company $company): void;

    public abstract function display($depth):void;

    public abstract function lineOfDuty(): void;
}