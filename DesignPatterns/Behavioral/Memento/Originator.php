<?php

namespace DesignPatterns\Behavioral\Memento;

class Originator
{
    private $state;

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}