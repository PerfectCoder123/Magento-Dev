<?php
namespace Practice\Core\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Customer\Model\Session as CustomerSession;
use Practice\Core\Logger\Logger;

class MyViewModel implements ArgumentInterface
{
    protected $customerSession;
    protected $logger;

    public function __construct(CustomerSession $customerSession, Logger $logger)
    {
        $this->customerSession = $customerSession;
        $this->logger = $logger;
    }

    public function getCustomerName()
    {
        if ($this->customerSession->isLoggedIn()) {
            $customer = $this->customerSession->getCustomer();
            return $customer->getFirstname();
        }
        return 'Guest';
    }

     public function sayHello(string $name): void
    {
        $this->logger->info("Hello $name! Logged at " . date('Y-m-d H:i:s'));
    }

}
