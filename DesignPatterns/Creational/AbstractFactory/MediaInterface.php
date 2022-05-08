<?php


namespace DesignPatterns\Creational\AbstractFactory;


/**
 * Interface MediaInterface
 *
 * @package DesignPatterns\Creational\AbstractFactory
 * @desc    该接口不是抽象工厂设计模式的一部分, 一般情况下, 每个组件都是不相干的
 */
interface MediaInterface
{
    public function render();
}
