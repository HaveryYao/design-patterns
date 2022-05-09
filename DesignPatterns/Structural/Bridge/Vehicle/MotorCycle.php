<?php

namespace DesignPatterns\Structural\Bridge\Vehicle;

use DesignPatterns\Structural\Bridge\Vehicle;

class MotorCycle extends Vehicle
{

    public function manufacture(): void
    {
        print 'motorcycle ';

        $this->workShop1->work();
        $this->workShop2->work();
    }
}
