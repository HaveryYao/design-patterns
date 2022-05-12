<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Decorator\Finery;
use DesignPatterns\Structural\Decorator\Person;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $fin = new Person('havery');
        $ts = new Finery\TShits();
        $su = new Finery\Suit();
        $ts->decorate($fin);
        $su->decorate($ts);
        $su->show();
        $this->expectOutputString('havery\'s show: t-shirt suit');
    }
}