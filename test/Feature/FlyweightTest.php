<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Flyweight\User;
use DesignPatterns\Structural\Flyweight\WebSiteFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function getTypes(): array
    {
        return [
            ['博客'],
            ['产品展示']
        ];
    }

    /**
     * @dataProvider getTypes
     *
     * @param $type
     * @return void
     */
    public function testFlyweight($type)
    {
        $factory = new WebSiteFactory();
        $website = $factory->getWebSiteCategory($type);
        $user = new User('test');
        $website->use($user);
        $this->assertSame();
        $this->expectOutputString('web site type:' . $type . ' user:' . $user->name);
    }

    public function testMulti()
    {
        $type = 'test_type';
        $factory = new WebSiteFactory();
        $website1 = $factory->getWebSiteCategory($type);
        $website2 = $factory->getWebSiteCategory($type);
        $this->assertSame($website1, $website2);
    }
}