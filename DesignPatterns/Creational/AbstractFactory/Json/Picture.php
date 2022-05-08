<?php


namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{

    public function render()
    {
        return json_encode(['path' => $this->path, 'name' => $this->name]);
    }
}
