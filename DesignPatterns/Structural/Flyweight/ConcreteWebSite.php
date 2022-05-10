<?php

namespace DesignPatterns\Structural\Flyweight;

class ConcreteWebSite extends WebSite
{

    private string $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function use(User $user): void
    {
        print 'web site type:' . $this->type . ' user:' . $user->name;
    }
}