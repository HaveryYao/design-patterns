<?php

namespace DesignPatterns\Behavioral\Mediator\SubSystem;

class Server extends \DesignPatterns\Behavioral\Mediator\Colleague
{
    public function process()
    {
        $data = $this->getMediator()->queryDB();
        $this->getMediator()->sendResponse('Hello ' . $data);
    }
}