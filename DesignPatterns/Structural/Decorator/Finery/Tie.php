<?php

namespace DesignPatterns\Structural\Decorator\Finery;

use DesignPatterns\Structural\Decorator\Finery;

class Tie extends Finery
{
    public function show()
    {
        parent::show();
        print ' tie';
    }
}