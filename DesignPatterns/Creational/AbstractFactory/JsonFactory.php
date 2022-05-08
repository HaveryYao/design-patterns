<?php


namespace DesignPatterns\Creational\AbstractFactory;


/**
 * Class JsonFactory
 * json 组件工厂
 *
 * @package DesignPatterns\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * 创建文本组件
     *
     * @param $content
     *
     * @return Json\Text
     */
    function createText($content)
    {
        return new Json\Text($content);
    }

    /**
     * 创建图片组件
     *
     * @param        $path
     * @param string $name
     *
     * @return  Json\Picture
     */
    function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $path);
    }
}
