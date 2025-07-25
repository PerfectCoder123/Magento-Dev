<?php

namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;

class ParentBlock extends Template
{
    public function getTitle()
    {
        return "This is the Parent Block";
    }
}
