<?php

namespace DesignPatterns\Behavioral\Command;

class HelloCommand implements CommandInterface
{
    public Receiver $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->write('hello world');
    }
}