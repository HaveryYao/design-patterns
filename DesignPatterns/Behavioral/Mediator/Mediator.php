<?php

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\SubSystem\Client;
use DesignPatterns\Behavioral\Mediator\SubSystem\Database;
use DesignPatterns\Behavioral\Mediator\SubSystem\Server;

class Mediator implements MediatorInterface
{
    private Client $client;
    private Server $server;
    private Database $database;

    public function setColleague(Client $client, Server $server, Database $database)
    {
        $this->client = $client;
        $this->server = $server;
        $this->database = $database;
    }


    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDB()
    {
        return $this->database->queryDB();
    }
}