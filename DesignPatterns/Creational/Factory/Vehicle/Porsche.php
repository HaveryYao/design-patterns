<?php

namespace DesignPatterns\Creational\Factory\Vehicle;

use DesignPatterns\Creational\Factory\VehicleInterface;

class Porsche implements VehicleInterface
{
    protected string $color;

    /**
     * @param $rgb
     * @return void
     */
    public function setColor($rgb): void
    {
        $this->color = $rgb;
    }

    /***
     * @return void
     */
    public function addTuningAMG(): void
    {

    }
}
