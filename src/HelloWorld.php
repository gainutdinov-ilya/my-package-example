<?php

namespace IGainutdinov;

class HelloWorld
{
    public function getHelloString(string $name): string
    {
        return "Hello {$name}";
    }
}