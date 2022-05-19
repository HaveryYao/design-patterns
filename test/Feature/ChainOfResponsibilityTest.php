<?php

namespace Tests\Feature;

use DesignPatterns\Behavioral\ChainOfResponsbility\Request;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\ChainOfResponsbility\Responsible\FastStorage;
use DesignPatterns\Behavioral\ChainOfResponsbility\Responsible\SlowStorage;

class ChainOfResponsibilityTest extends TestCase
{
    protected $chain;

    protected function setUp(): void
    {
        $this->chain = new FastStorage(array('bar' => 'baz'));
        $this->chain->append(new SlowStorage(array('foo' => 'bar')));
    }

    public function makeRequest()
    {
        $request = new Request();
        $request->verb = 'get';

        return [
            [$request]
        ];
    }

    /**
     * @dataProvider makeRequest
     * @param Request $request
     * @return void
     */
    public function testFastStorage(Request $request)
    {
        $request->key = 'bar';
        $this->chain->handle($request);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);
        $this->assertEquals(FastStorage::class, $request->forDebugOnly);
    }


    /**
     * @dataProvider makeRequest
     * @param Request $request
     * @return void
     */
    public function testSlowStorage(Request $request)
    {
        $request->key = 'foo';
        $this->chain->handle($request);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
        $this->assertEquals(SlowStorage::class, $request->forDebugOnly);
    }
}