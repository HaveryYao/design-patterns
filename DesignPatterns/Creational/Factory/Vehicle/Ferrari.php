<?php

namespace DesignPatterns\Creational\Factory\Vehicle;

use DesignPatterns\Creational\Factory\VehicleInterface;

class Ferrari implements VehicleInterface
{
    protected string $color;

    /**
     * @param string $rgb
     * @return void
     */
    public function setColor($rgb): void
    {
        $this->color = $rgb;
    }
}
