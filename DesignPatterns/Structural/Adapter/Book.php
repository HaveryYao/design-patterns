<?php

namespace DesignPatterns\Structural\Adapter;

abstract class Book
{
    public abstract function open();

    public abstract function turnPage();
}