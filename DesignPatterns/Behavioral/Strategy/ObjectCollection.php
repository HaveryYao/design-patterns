<?php

namespace DesignPatterns\Behavioral\Strategy;

class ObjectCollection
{
    private ComparatorInterface $comparator;

    private array $elements;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function sort(): array
    {
        if (!isset($this->comparator)) {
            throw new \Exception('comparator is not set');
        }
        uasort($this->elements, [$this->comparator, 'compare']);
        return $this->elements;
    }
}