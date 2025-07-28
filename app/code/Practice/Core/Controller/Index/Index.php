<?php

namespace Practice\Core\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Practice\Core\Model\DemoLogger;
use Practice\Core\Model\GreetingService;

class Index implements HttpGetActionInterface
{
     protected $resultFactory;

     protected $eventService;
    public function __construct(ResultFactory $resultFactory, public DemoLogger $demoLogger, GreetingService $eventService )
    {
     $this->resultFactory = $resultFactory;
     $this->eventService = $eventService;
    }

    public function execute()
    {
          $this->demoLogger->logSomething();
          $this->eventService->sendGreeting("ramesh");
         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
