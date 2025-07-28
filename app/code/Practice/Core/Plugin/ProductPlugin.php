<?php
namespace Practice\Core\Plugin;

class ProductPlugin
{
    public function beforeGetName(\Magento\Catalog\Model\Product $subject)
    {
        // Called before getName()
        // You can manipulate state of $subject or log something
        return null; // No change to arguments
    }

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        $originalName = $proceed(); // Call the original method
        return $originalName . ' [Modified by around plugin]';
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result . ' [Modified by after plugin]';
    }
}
