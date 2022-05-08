<?php

namespace Tests\Feature;

use DesignPatterns\Creational\Singleton\SingleTon;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $firstCall = SingleTon::getInstance();
        $this->assertInstanceOf(SingleTon::class,$firstCall);
        $secondCall = SingleTon::getInstance();
        $this->assertSame($firstCall,$secondCall);
    }

    public function testConstructPrivate()
    {
        $instance = SingleTon::getInstance();
        $obj = new \ReflectionObject($instance);
        $method = $obj->getMethod('__construct');
        $this->assertTrue($method->isPrivate());
    }
}