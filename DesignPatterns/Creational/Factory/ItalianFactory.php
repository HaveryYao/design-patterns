<?php

namespace DesignPatterns\Creational\Factory;

use DesignPatterns\Creational\Factory\Vehicle\Bicycle;
use DesignPatterns\Creational\Factory\Vehicle\Ferrari;
use http\Exception\InvalidArgumentException;

class ItalianFactory extends VehicleFactory
{

    protected function createVehicle(VehicleType $type): VehicleInterface
    {
       return match($type){
            VehicleType::CHEAP => new Bicycle(),
            VehicleType::FAST => new Ferrari(),
            default => throw new InvalidArgumentException('未知的车辆类型')
        };
    }
}
