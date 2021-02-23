<?php

namespace Flex\Http;

class Request implements RequestInterface
{
    protected string $uri;

    public function __construct(string $uri = '/')
    {
        $this->uri = $uri;
    }

    public function getUri()
    {
        return $this->uri;
    }
}