<?php

namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    public function passNext();

    public function passStart();
}