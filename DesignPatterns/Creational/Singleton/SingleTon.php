<?php

namespace DesignPatterns\Creational\Singleton;

class SingleTon
{
    public static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception('this object can not be deserialized');
    }

    public static function getInstance(): SingleTon
    {
        if (null == static::$instance) {
            static::$instance = new self();
        }

        return static::$instance;
    }
}