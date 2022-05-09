<?php

namespace DesignPatterns\Structural\Bridge\WorkShop;
use DesignPatterns\Structural\Bridge\WorkShop;

class Assemble extends WorkShop
{

    public function work(): void
    {
        print 'assembled';
    }
}