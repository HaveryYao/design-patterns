<?php

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo get_class($subject) . ' has been updated';
    }
}