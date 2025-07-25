<?php
namespace Practice\Core\Model;

class Greeter
{
    protected $greeting;

    public function __construct(GreetingInterface $greeting)
    {
        $this->greeting = $greeting;
    }

    public function greetUser(string $name): string
    {
        return $this->greeting->greet($name);
    }
}
