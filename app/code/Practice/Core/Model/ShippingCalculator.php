<?php

namespace Practice\Core\Model;

class ShippingCalculator
{
    protected $rate;

    public function __construct(float $rate)
    {
        $this->rate = $rate;
    }

    public function calculate(float $weight): float
    {
        return $weight * $this->rate;
    }
}
