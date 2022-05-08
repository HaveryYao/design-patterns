<?php


namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Builder;

class Director
{
    /**
     * @param \DesignPatterns\Creational\Builder\Builder $builder
     * @return Vehicle
     */
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addWheel();
        $builder->addDoors();

        return $builder->getVehicle();
    }
}
