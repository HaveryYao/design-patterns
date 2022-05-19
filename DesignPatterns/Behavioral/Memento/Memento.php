<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = is_object($state) ? clone $state : $state;
    }

    public function getState(): mixed
    {
        return $this->state;
    }
}