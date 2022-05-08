<?php

namespace Tests\Feature;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\BookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function getPrototype():array
    {
        return [
            [new BarBookPrototype()],
            [new FooBookPrototype()]
        ];
    }

    /**
     * @return void
     * @dataProvider getPrototype
     */
    public function testClone(BookPrototype $prototype)
    {
        $book = clone $prototype;
        $book->setTitle($prototype->getCategory() . 'BOOK');
        $this->assertInstanceOf(get_class($prototype), $prototype);
    }
}