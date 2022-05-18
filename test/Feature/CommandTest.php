<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    protected $invoker;
    protected $receiver;

    protected function setUp(): void
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function testHelloCommand()
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();
        $this->expectOutputString('hello world');
    }
}