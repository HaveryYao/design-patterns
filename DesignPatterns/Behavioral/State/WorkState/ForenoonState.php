<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class ForenoonState extends State
{
    public function writeProgram(Work $work): void
    {
        if ($work->hour < 12) {
            print '当前时间：' . $work->hour . '点，上午工作，精神百倍' . PHP_EOL;
        } else {
            $work->setState(new NoonState());
            $work->writeProgram();
        }
    }
}