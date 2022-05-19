<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    protected $observer;

    protected function setUp(): void
    {
        $this->observer = new UserObserver();
    }

    public function testObserver()
    {
        $user = new User();
        $user->attach($this->observer);
        $this->expectOutputString(User::class . ' has been updated');
        $user->key = 'value';
    }
}