<?php


namespace DesignPatterns\Creational\AbstractFactory;


abstract class Picture implements MediaInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * Picture constructor.
     *
     * @param $path
     * @param $name
     */
    public function __construct($path, $name)
    {
        $this->path = (string)$path;
        $this->name = (string)$name;
    }
}
