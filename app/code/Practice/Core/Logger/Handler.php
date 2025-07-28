<?php
namespace Practice\Core\Logger;


use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $fileName = '/var/log/my_custom.log';
    protected $loggerType = Logger::DEBUG;
}

