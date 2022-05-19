<?php

namespace DesignPatterns\Behavioral\Mediator\SubSystem;

class Client extends \DesignPatterns\Behavioral\Mediator\Colleague
{

    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }
}