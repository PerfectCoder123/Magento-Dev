<?php

namespace Learning\Popup\Controller\Index;

use Aws\ResultInterface;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function execute() : ResultInterface
    {
        /** @var Page $resultPage  */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Learning_Popup::popup');
        $resultPage->addBreadcrumb(__('Popups'), __('Popups'));
        $resultPage->addBreadcrumb(__('Manage Popups'), __('Manage Popups'));
        $resultPage->getConfig()->getTitle()->prepend(__('Popups'));
        return $resultPage;
    }
}
