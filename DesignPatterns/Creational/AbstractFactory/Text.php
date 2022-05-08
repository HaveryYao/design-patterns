<?php


namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $content;

    /**
     * Text constructor.
     *
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = (string)$content;
    }
}
