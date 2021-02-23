<?php

use Flex\Http\Request;
use Flex\Http\RequestInterface;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testNewRequest()
    {
        $request = new Request();

        $this->assertInstanceOf(RequestInterface::class, $request);
    }

    public function testNewRequestWhithoutParams()
    {
        $request = new Request();

        $this->assertEquals('/', $request->getUri());
    }
}