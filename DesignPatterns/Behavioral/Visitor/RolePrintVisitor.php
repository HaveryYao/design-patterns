<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\Role\Group;
use DesignPatterns\Behavioral\Visitor\Role\User;

class RolePrintVisitor implements RoleVisitorInterface
{

    /**
     * {@inheritdoc}
     */
    public function visitGroup(Group $role)
    {
        echo "Role: " . $role->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function visitUser(User $role)
    {
        echo "Role: " . $role->getName();
    }
}