<?php

namespace DesignPatterns\Behavioral\Observer;

use JetBrains\PhpStorm\Internal\TentativeType;
use SplObserver;

class User implements \SplSubject
{
    private \SplObjectStorage $observers;

    private array $data = [];

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
        $this->notify();
    }
}