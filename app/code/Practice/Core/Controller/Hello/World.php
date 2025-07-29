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
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $block = $resultPage->getLayout()->getBlock('my.custom.block');
        if ($block) {
            $block->setMyData('Passed from controller');
        }
        return $resultPage;

    }
}

