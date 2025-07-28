<?php
namespace Practice\Core\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Practice\Core\Logger\Logger;
use Psr\Log\LoggerInterface;

class GreetingLoggerObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $data = $observer->getEvent()->getData();
        $name = $data['greeting_name'];
        $this->logger->info("Greeting about to be sent to: " . $name);
    }
}
