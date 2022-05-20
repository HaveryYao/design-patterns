<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\Role\Group;
use DesignPatterns\Behavioral\Visitor\Role\User;

interface RoleVisitorInterface
{
    public function visitUser(User $user);

    public function visitGroup(Group $group);
}