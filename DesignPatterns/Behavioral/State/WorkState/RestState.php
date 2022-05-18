<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class RestState extends State
{

    public function __construct()
    {
    }

    public function writeProgram(Work $work): void
    {
        print '当前时间：' . $work->hour . '点，下班回家' . PHP_EOL;
    }
}