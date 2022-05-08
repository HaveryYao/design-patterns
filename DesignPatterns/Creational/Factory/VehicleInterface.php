<?php

namespace DesignPatterns\Creational\Factory;

interface VehicleInterface
{
    /**
     * 上色
     * @param $rgb
     * @return void
     */
    public function setColor($rgb): void;
}
