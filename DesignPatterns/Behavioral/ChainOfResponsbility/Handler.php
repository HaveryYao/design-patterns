<?php

namespace DesignPatterns\Behavioral\ChainOfResponsbility;

abstract class Handler
{
    protected Handler $handler;

    public function append(Handler $handler)
    {
        if (isset($this->handler)) {
            $this->handler->append($handler);
        } else {
            $this->handler = $handler;
        }
    }

    public function handle(Request $request)
    {
        if ($this->process($request)) {
            $request->forDebugOnly = get_called_class();
        }
        if (isset($this->handler)) {
            $this->handler->handle($request);
        }
    }

    public abstract function process(Request $request);
}