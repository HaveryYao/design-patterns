<?php

namespace DesignPatterns\Structural\Bridge\Vehicle;

use DesignPatterns\Structural\Bridge\Vehicle;

class Car extends Vehicle
{

    public function manufacture(): void
    {
        print 'car ';

        $this->workShop1->work();
        $this->workShop2->work();
    }
}