<?php

namespace Practice\Core\Block;

use Magento\Framework\View\Element\Template;

class Shipping extends Template
{
    protected $calculator;

    public function __construct(
        Template\Context $context,
        \Practice\Core\Model\ShippingCalculator $calculator,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->calculator = $calculator;
    }

    public function getShippingCost(float $weight): float
    {
        return $this->calculator->calculate($weight);
    }
}
