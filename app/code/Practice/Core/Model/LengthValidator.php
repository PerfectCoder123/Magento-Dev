<?php

namespace Practice\Core\Model;

use Magento\Framework\Exception\LocalizedException;

class LengthValidator implements ValidatorInterface
{
    public function validate(string $input): void
    {
        if (strlen($input) < 5) {
            throw new LocalizedException(__('Input must be at least 5 characters.'));
        }
    }
}
