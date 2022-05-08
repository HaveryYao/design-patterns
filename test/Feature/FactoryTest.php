<?php

namespace Tests\Feature;

use DesignPatterns\Creational\Factory\GermanFactory;
use DesignPatterns\Creational\Factory\ItalianFactory;
use DesignPatterns\Creational\Factory\VehicleFactory;
use DesignPatterns\Creational\Factory\VehicleInterface;
use DesignPatterns\Creational\Factory\VehicleType;
use JetBrains\PhpStorm\Pure;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    private array $types = [VehicleType::CHEAP, VehicleType::FAST];

    #[Pure] public function getFactory(): array
    {
        return [
            [new GermanFactory()],
            [new ItalianFactory()]
        ];
    }

    /**
     * A basic feature test example.
     * @dataProvider getFactory
     * @param VehicleFactory $factory
     * @return void
     */
    public function testFactory(VehicleFactory $factory)
    {
        foreach ($this->types as $type) {
            $vehicle = $factory->create($type);
            $this->assertInstanceOf(VehicleInterface::class, $vehicle);
        }
    }
}
