<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\Role\Group;
use DesignPatterns\Behavioral\Visitor\Role\User;
use DesignPatterns\Behavioral\Visitor\RolePrintVisitor;
use DesignPatterns\Behavioral\Visitor\RoleVisitorInterface;

class VisitorTest extends \PHPUnit\Framework\TestCase
{
    private RoleVisitorInterface $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RolePrintVisitor();
    }

    public function getRoles()
    {
        return [
            [
                new User('Havery'), 'Role: User Havery'
            ], [
                new Group('Administrator'), 'Role: Group Administrator'
            ]
        ];
    }


    /**
     * @dataProvider getRoles
     * @return void
     */
    public function testVisitor(Role $role, $expected)
    {
        $role->accept($this->visitor);
        $this->expectOutputString($expected);
    }

    /**
     * @return void
     */
    public function testException()
    {
        $role = $this->getMockForAbstractClass(Role::class);
        $this->expectException(\InvalidArgumentException::class);
        $role->accept($this->visitor);
    }
}