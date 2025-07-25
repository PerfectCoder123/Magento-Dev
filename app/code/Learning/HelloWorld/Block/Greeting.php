<?php

namespace Learning\HelloWorld\Block;

class Greeting extends \Magento\Framework\View\Element\Template
{
    public function greet()
    {
        return __('This is a greeting title');
    }
}
