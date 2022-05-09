<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Bridge\Vehicle\Car;
use DesignPatterns\Structural\Bridge\Vehicle\MotorCycle;
use DesignPatterns\Structural\Bridge\WorkShop\Assemble;
use DesignPatterns\Structural\Bridge\WorkShop\Produce;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCar()
    {
        $car = new Car(new Produce(),new Assemble());
        $this->expectOutputString('car produced assembled');
        $car->manufacture();
    }

    public function testMotorcycle()
    {
        $motorcycle = new MotorCycle(new Produce(),new Assemble());
        $this->expectOutputString('motorcycle produced assembled');
        $motorcycle->manufacture();
    }
}