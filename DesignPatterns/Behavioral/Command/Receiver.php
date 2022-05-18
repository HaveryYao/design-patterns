<?php

namespace DesignPatterns\Behavioral\Command;

class Receiver
{
    public function write($str)
    {
        print  $str;
    }
}