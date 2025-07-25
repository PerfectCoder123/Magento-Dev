<?php
namespace Practice\Core\Model;

interface GreetingInterface
{
    public function greet(string $name): string;
}
