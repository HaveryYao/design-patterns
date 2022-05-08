<?php


namespace DesignPatterns\Creational\Builder;


abstract class Builder
{
    /**
     * @var Vehicle
     */
    protected Vehicle $vehicle;

    public abstract function addEngine();

    public abstract function addWheel();

    public abstract function addDoors();

    public abstract function createVehicle();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}
