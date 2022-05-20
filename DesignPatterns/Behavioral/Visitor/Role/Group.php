<?php

namespace DesignPatterns\Behavioral\Visitor\Role;

use DesignPatterns\Behavioral\Visitor\Role;

class Group extends Role
{
    public function getName(): string
    {
        return 'Group ' . $this->name;
    }
}