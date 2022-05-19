<?php

namespace DesignPatterns\Behavioral\ChainOfResponsbility\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsbility\Handler;
use DesignPatterns\Behavioral\ChainOfResponsbility\Request;

class SlowStorage extends Handler
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function process(Request $request)
    {
        if ('get' == $request->verb) {
            if (array_key_exists($request->key, $this->data)) {
                $request->response = $this->data[$request->key];
                return true;
            }
        }

        return false;
    }
}