<?php

namespace DesignPatterns\Behavioral\Visitor\Role;

use DesignPatterns\Behavioral\Visitor\Role;

class User extends Role
{

    public function getName(): string
    {
        return 'User ' . $this->name;
    }
}