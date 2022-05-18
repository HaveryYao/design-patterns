<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class NoonState extends State
{
    public function writeProgram(Work $work): void
    {
        if ($work->hour < 13) {
            print '当前时间：' . $work->hour . '点，午饭，午休' . PHP_EOL;
        } else {
            $work->setState(new AfternoonState());
            $work->writeProgram();
        }
    }
}