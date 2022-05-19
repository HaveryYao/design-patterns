<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Memento\Caretaker;
use DesignPatterns\Behavioral\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    private $originator;

    protected function setUp(): void
    {
        $this->originator = new Originator();
    }

    public function testStringState()
    {
        $this->originator->setState('state_1');
        $caretaker = new Caretaker();
        $caretaker->saveMemento($this->originator->setMemento());
        $this->originator->setState('state_2');
        $caretaker->saveMemento($this->originator->setMemento());
        $this->originator->setState('state_3');
        $this->originator->restoreFromMemento($caretaker->getMemento(0));
        $this->assertEquals('state_1', $this->originator->getState());
    }

    public function testObjState()
    {
        $caretaker = new Caretaker();
        $state = new \stdClass();
        $state->name = 'state_1';
        $this->originator->setState($state);
        $caretaker->saveMemento($this->originator->setMemento());
        $this->assertEquals($caretaker->getMemento(0)->getState()->name, $this->originator->getState()->name);
        $this->assertNotSame($caretaker->getMemento(0)->getState(), $this->originator->getState());

        $state->name = 'state_2';
        $this->assertSame($state, $this->originator->getState());
        $this->originator->restoreFromMemento($caretaker->getMemento(0));
        $this->assertNotSame($state, $this->originator->getState());
        $this->assertEquals('state_1', $this->originator->getState()->name);
    }
}