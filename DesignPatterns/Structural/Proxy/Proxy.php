<?php

namespace DesignPatterns\Structural\Proxy;

class Proxy extends Subject
{
    private Subject $realSubject;
    public function request()
    {
        if(!isset($this->realSubject)){
            $this->realSubject = new RealSubject();
        }

        $this->realSubject->request();
    }
}