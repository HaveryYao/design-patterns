<?php

namespace DesignPatterns\Structural\Decorator\Finery;

use DesignPatterns\Structural\Decorator\Finery;

class Suit extends Finery
{
    public function show()
    {
        parent::show();
        print ' suit';
    }
}