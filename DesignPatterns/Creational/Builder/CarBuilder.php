<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Vehicle\Car;

class CarBuilder extends Builder
{

    public function addEngine()
    {
        $this->vehicle->body[] = $this->vehicle->engine;
    }

    public function addWheel()
    {
        $this->vehicle->body[] = $this->vehicle->wheel;
    }

    public function addDoors()
    {
        $this->vehicle->body[] = $this->vehicle->doors;
    }

    public function createVehicle()
    {
        $this->vehicle = new Car();
    }
}
