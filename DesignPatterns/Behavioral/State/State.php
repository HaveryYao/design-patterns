<?php

namespace DesignPatterns\Behavioral\State;

abstract class State
{
    public abstract function writeProgram(Work $work):void;
}