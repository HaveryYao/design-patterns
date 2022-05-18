<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class AfternoonState extends State
{
    public function writeProgram(Work $work): void
    {
        if ($work->hour < 17) {
            print '当前时间：' . $work->hour . '点，下午状态还不错，继续努力' . PHP_EOL;
        } else {
            $work->setState(new EveningState());
            $work->writeProgram();
        }
    }
}