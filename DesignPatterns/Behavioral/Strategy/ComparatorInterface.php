<?php

namespace DesignPatterns\Behavioral\Strategy;

interface ComparatorInterface
{
    public function compare($dataA, $dataB);
}