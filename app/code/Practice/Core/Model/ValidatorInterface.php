<?php

namespace Practice\Core\Model;

interface ValidatorInterface
{
    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function validate(string $input): void;
}
