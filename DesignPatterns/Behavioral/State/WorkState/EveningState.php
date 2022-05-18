<?php

namespace DesignPatterns\Behavioral\State\WorkState;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\Work;

class EveningState extends State
{
    public function writeProgram(Work $work): void
    {
        if ($work->workFinished) {
            $work->setState(new RestState());
            $work->writeProgram();
        } else {
            if ($work->hour < 21) {
                print '当前时间：' . $work->hour . '点，加班' . PHP_EOL;
            } else {
                $work->setState(new SleepingState());
                $work->writeProgram();
            }
        }
    }
}