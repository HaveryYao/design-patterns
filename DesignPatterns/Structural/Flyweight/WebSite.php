<?php

namespace DesignPatterns\Structural\Flyweight;

abstract class WebSite
{
    public abstract function use(User $user):void;
}