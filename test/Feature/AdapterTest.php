<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\Ebook\Kindle;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function getBooks():array
    {
        return [
            [new EBookAdapter(new Kindle())]
        ];
    }

    /**
     * @dataProvider  getBooks
     * @param Book $book
     * @return void
     */
    public function testAdapter(Book $book)
    {
        $this->assertTrue(method_exists($book,'open'));
        $this->assertTrue(method_exists($book,'turnPage'));
    }
}