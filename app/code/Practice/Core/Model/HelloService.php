<?php

namespace Practice\Core\Model;


class HelloService
{
    public function composeGreeting(string $greeting, string $name): string
    {
        return sprintf('%s, %s! 👋', $greeting, $name);
    }
}