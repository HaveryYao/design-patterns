<?php

namespace DesignPatterns\Structural\Bridge\WorkShop;

use DesignPatterns\Structural\Bridge\WorkShop;

class Produce extends WorkShop
{

    public function work(): void
    {
        print 'produced ';
    }
}