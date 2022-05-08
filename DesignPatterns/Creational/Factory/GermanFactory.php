<?php

namespace DesignPatterns\Creational\Factory;

use DesignPatterns\Creational\Factory\Vehicle\Bicycle;
use DesignPatterns\Creational\Factory\Vehicle\Porsche;
use http\Exception\InvalidArgumentException;

class GermanFactory extends VehicleFactory
{

    /**
     * @param VehicleType $type
     * @return VehicleInterface
     */
    protected function createVehicle(VehicleType $type): VehicleInterface
    {
        switch ($type) {
            case VehicleType::CHEAP:
                return new Bicycle();
            case VehicleType::FAST:
                $obj = new Porsche();
                $obj->addTuningAMG();
                return $obj;
            default:
                throw new InvalidArgumentException('未知的车辆类型');
        }
    }
}
