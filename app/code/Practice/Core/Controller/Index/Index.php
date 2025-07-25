<?php

namespace Practice\Core\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Practice\Core\Model\DemoLogger;

class Index implements HttpGetActionInterface
{
     protected $resultFactory;

    public function __construct(ResultFactory $resultFactory, public DemoLogger $demoLogger)
    {
    $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
          $this->demoLogger->logSomething();
         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
