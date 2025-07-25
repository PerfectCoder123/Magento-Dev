<?php
namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;

class ChildBlock extends Template
{
    public function getMessage()
    {
        return "Hello from the nested Child Block!";
    }
}
