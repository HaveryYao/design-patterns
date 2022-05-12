<?php

namespace DesignPatterns\Structural\Decorator\Finery;

use DesignPatterns\Structural\Decorator\Finery;

class TShits extends Finery
{
    public function show()
    {
        parent::show();
        print ' t-shirt';
    }
}