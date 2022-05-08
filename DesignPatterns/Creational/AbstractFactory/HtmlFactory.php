<?php


namespace DesignPatterns\Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory
{

    /**
     * @param $content
     *
     * @return Text
     */
    function createText($content)
    {
        return new Html\Text($content);
    }

    /**
     * @param        $path
     * @param string $name
     *
     * @return Picture
     */
    function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }
}
