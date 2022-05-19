<?php

namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    public function sendResponse($content);

    public function makeRequest();

    public function queryDB();
}