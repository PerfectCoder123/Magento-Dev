<?php

namespace Practice\Core\Model;

use Psr\Log\LoggerInterface;

class DemoLogger
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logSomething()
    {
        $this->logger->info("This is a test log from DemoLogger.");
    }
}
