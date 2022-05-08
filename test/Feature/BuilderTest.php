<?php

namespace Tests\Feature;

use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private $director;

    public function setUp(): void
    {
        parent::setUp();
        $this->director = new Director();
    }

    public function getBuilders()
    {
        return [
            [new CarBuilder()],
            [new BikeBuilder()]
        ];
    }

    /**
     * A basic feature test example.
     *
     * @dataProvider getBuilders
     * @return void
     */
    public function testBuild(Builder $builder)
    {
        $vehicle = $this->director->build($builder);
        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Vehicle', $vehicle);
    }
}
