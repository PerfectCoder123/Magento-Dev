<?php
namespace Practice\Core\Logger;

use Monolog\Logger as MonologLogger;

class Logger extends MonologLogger
{
    public function __construct(array $handlers = [], array $processors = [])
    {
        parent::__construct('practice_logger', $handlers, $processors);
    }
}
