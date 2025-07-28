<?php
namespace Practice\Core\Model;

use Magento\Framework\Event\ManagerInterface;

class GreetingService
{
    protected $eventManager;

    public function __construct(ManagerInterface $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function sendGreeting($name)
    {
        // Your business logic here...

        // Dispatch the event
        $this->eventManager->dispatch('practice_greeting_send_before', [
            'greeting_name' => $name
        ]);
    }
}
