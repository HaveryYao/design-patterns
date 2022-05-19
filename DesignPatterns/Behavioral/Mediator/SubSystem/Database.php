<?php

namespace DesignPatterns\Behavioral\Mediator\SubSystem;

class Database extends \DesignPatterns\Behavioral\Mediator\Colleague
{
    public function queryDB(): string
    {
        return 'World';
    }
}