<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\SubSystem\Client;
use DesignPatterns\Behavioral\Mediator\SubSystem\Database;
use DesignPatterns\Behavioral\Mediator\SubSystem\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        $mediator = new Mediator();
        $this->client = new Client($mediator);
        $mediator->setColleague($this->client, new Server($mediator), new Database($mediator));
    }

    public function testOutput()
    {
        $this->client->request();
        $this->expectOutputString('Hello World');
    }
}