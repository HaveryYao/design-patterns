<?php

namespace DesignPatterns\Structural\Bridge;

abstract class Vehicle
{
    /**
     * @var WorkShop
     */
    protected WorkShop $workShop1;

    /**
     * @var WorkShop
     */
    protected WorkShop $workShop2;

    public abstract function manufacture(): void;

    public function __construct(WorkShop $workShop1, WorkShop $workShop2)
    {
        $this->workShop1 = $workShop1;
        $this->workShop2 = $workShop2;
    }
}