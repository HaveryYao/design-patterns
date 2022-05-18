<?php

namespace DesignPatterns\Behavioral\Iterator;

class Book
{
    private string $author;
    private string $title;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->title . ' by ' . $this->author;
    }
}