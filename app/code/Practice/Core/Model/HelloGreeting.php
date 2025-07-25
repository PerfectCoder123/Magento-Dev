<?php
namespace Practice\Core\Model;

class HelloGreeting implements GreetingInterface
{
    public function greet(string $name): string
    {
        return "Hello, " . $name . "!";
    }
}
