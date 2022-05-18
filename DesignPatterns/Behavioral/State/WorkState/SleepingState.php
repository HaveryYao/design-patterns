<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class SleepingState extends State
{
    public function writeProgram(Work $work): void
    {
        print '当前时间：' . $work->hour . '点，不行了，快睡着了' . PHP_EOL;
    }
}