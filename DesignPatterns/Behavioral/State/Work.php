<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\WorkState\ForenoonState;

class Work
{
    /**
     * 当前时间
     * @var int
     */
    public int $hour;

    /**
     * 工作是否完成
     * @var bool
     */
    public bool $workFinished = false;
    /**
     * @var State State
     */
    private State $state;

    /**
     *
     */
    public function __construct()
    {
        $this->state = new ForenoonState();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function writeProgram()
    {
        $this->state->writeProgram($this);
    }
}