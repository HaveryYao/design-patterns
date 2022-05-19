<?php

namespace DesignPatterns\Behavioral\Memento;

class Caretaker
{
    private array $history;

    public function saveMemento(Memento $memento)
    {
        $this->history[] = $memento;
    }

    public function getMemento(int $id): mixed
    {
        return $this->history[$id] ?? null;
    }
}