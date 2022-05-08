<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Vehicle\Bike;

class BikeBuilder extends Builder
{

    public function addEngine()
    {
        $this->vehicle->body[] = $this->vehicle->engine;
        $this->vehicle->body[] = '脚踏板';
    }

    public function addWheel()
    {
        $this->vehicle->body[] = $this->vehicle->wheel;
        $this->vehicle->body[] = '手刹';
    }

    public function addDoors()
    {
        $this->vehicle->body[] = $this->vehicle->doors;
    }

    public function createVehicle()
    {
        $this->vehicle = new Bike();
    }
}
