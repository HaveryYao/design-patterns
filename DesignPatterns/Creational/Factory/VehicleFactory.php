<?php

namespace DesignPatterns\Creational\Factory;

abstract class VehicleFactory
{
    /**
     * 创建具体机动车实例
     * @param VehicleType $type
     * @return VehicleInterface
     */
    protected abstract function createVehicle(VehicleType $type): VehicleInterface;

    /**
     * 创建机动车并上色
     * @param VehicleType $type
     * @return VehicleInterface
     */
    public function create(VehicleType $type): VehicleInterface
    {
        $vehicle = $this->createVehicle($type);
        $vehicle->setColor('#f00');
        return $vehicle;
    }
}
