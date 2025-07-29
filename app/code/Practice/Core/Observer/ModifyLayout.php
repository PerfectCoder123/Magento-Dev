<?php

namespace Practice\Core\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

use Magento\Framework\View\LayoutInterface;

class ModifyLayout implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        /** @var LayoutInterface $layout */
        $layout = $observer->getEvent()->getLayout();

        // ✅ Remove a block by name
        $layout->unsetElement('catalog.leftnav'); // example: layered navigation block

        // ✅ Add a block dynamically
        $customBlock = $layout->createBlock(
            \Magento\Framework\View\Element\Text::class,
            'practice.dynamic.block'
        )->setText('<div style="padding:10px; background:#eee;">Dynamically added block!</div>');

        $layout->getBlock('content')->append($customBlock);
    }
}
