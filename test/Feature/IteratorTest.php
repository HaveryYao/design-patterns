<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    protected BookList $bookList;

    public function setUp(): void
    {
        $this->bookList = new BookList();
        $this->bookList->add(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $this->bookList->add(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $this->bookList->add(new Book('Clean Code', 'Robert C. Martin'));
    }

    public function expectedAuthors()
    {
        return [
            [
                [
                    'Learning PHP Design Patterns by William Sanders',
                    'Professional Php Design Patterns by Aaron Saray',
                    'Clean Code by Robert C. Martin'
                ]
            ],
        ];
    }

    /**
     * @dataProvider expectedAuthors
     */
    public function testIterator($authors)
    {
        $index = 0;
        foreach ($this->bookList as $book) {
            $this->assertEquals($book->getAuthorAndTitle(), $authors[$index]);
            $index++;
        }
    }

}