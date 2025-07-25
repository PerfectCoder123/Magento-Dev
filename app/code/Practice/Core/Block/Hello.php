<?php
namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getMessage()
    {
        return "Hello from the custom block class!";
    }
}
