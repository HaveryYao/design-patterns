<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Proxy\Proxy;
use DesignPatterns\Structural\Proxy\RealSubject;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $proxy = new Proxy();
        $this->expectOutputString('real request');
        $proxy->request();
    }
}