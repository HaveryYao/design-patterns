<?php

namespace DesignPatterns\Structural\Flyweight;

class WebSiteFactory
{
    private array $repository = [];

    public function getWebSiteCategory($type): WebSite
    {
        if (!array_key_exists($type,$this->repository)) {
            $this->repository[$type] = new ConcreteWebSite($type);
        }

        return $this->repository[$type];
    }
}