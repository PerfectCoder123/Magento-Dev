<?php

namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class WidgetBlock extends Template implements BlockInterface
{
    protected $_template = 'Practice_Core::widget-box.phtml';

    public function getMessage()
    {
        return $this->getData('message');
    }
}
