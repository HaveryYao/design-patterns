<?php


namespace DesignPatterns\Creational\Builder;


abstract class Vehicle
{
    public array $body = [];
    public string $wheel;
    public string $doors;
    public string $engine;
}
