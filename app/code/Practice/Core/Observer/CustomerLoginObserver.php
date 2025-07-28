<?php
namespace Practice\Core\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Practice\Core\Logger\Logger;
use Psr\Log\LoggerInterface;

class CustomerLoginObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $this->logger->info('Customer Logged In: ' . $customer->getEmail());
    }
}
