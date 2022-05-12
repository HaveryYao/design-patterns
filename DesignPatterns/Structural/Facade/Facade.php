<?php

namespace DesignPatterns\Structural\Facade;

use JetBrains\PhpStorm\Pure;

class Facade
{
    private SubSystemOne $systemOne;
    private SubSystemTwo $systemTwo;
    private SubSystemThree $systemThree;

    #[Pure] public function __construct()
    {
        $this->systemOne = new SubSystemOne();
        $this->systemTwo = new SubSystemTwo();
        $this->systemThree = new SubSystemThree();
    }

    public function methodA()
    {
        $this->systemOne->methodOne();
        $this->systemTwo->methodTwo();
    }

    public function methodB()
    {
        $this->systemThree->methodThree();
        $this->systemOne->methodOne();
    }
}