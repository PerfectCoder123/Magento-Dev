<?php
namespace Practice\Core\Model;

use Psr\Log\LoggerInterface;

class TargetClass
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->info("This is a custom log message.");
    }
}
