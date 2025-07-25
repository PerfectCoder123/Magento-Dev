<?php
namespace Practice\Core\Controller\Hello;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class World implements ActionInterface, HttpGetActionInterface
{
    protected $resultFactory;

    public function __construct(ResultFactory $resultFactory)
    {
    $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
    return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

