<?php

namespace DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    protected string $title;

    protected string $category;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public abstract function __clone();
}