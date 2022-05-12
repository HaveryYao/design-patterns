<?php

namespace DesignPatterns\Structural\Proxy;

class RealSubject extends Subject
{

    public function request()
    {
        print 'real request';
    }
}