<?php

namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\Session;

class CustomerInfo extends Template
{
    protected $customerSession;

    public function __construct(
        Context $context,
        \Magento\Customer\Model\Session\Proxy $customerSession, // PROXY!
        array $data = []
    ) {
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function getCustomerName(): string
    {
        if ($this->customerSession->isLoggedIn()) {
            return $this->customerSession->getCustomer()->getName();
        }
        return 'Guest';
    }
}
