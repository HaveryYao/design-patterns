<?php

namespace DesignPatterns\Behavioral\Iterator;


class BookList implements \Iterator
{
    /**
     * @var array
     */
    private array $books = [];

    private int $currentIndex = 0;

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function get($index): mixed
    {
        if (isset($this->books[$index])) {
            return $this->books[$index];
        }

        return null;
    }

    public function remove(Book $book): bool
    {
        $success = false;
        foreach ($this->books as $index => $item) {
            if ($book->getAuthorAndTitle() === $item->getAuthorAndTitle()) {
                unset($this->books[$index]);
                $success = true;
            }
        }
        return $success;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): mixed
    {
        return $this->get($this->currentIndex);
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return $this->current() !== null;
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}