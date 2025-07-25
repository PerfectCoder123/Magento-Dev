<?php

namespace Practice\Core\Model;

use Magento\Framework\Exception\LocalizedException;

class AlphaValidator implements ValidatorInterface
{
    public function validate(string $input): void
    {
        if (!ctype_alpha($input)) {
            throw new LocalizedException(__('Input must contain only alphabets.'));
        }
    }
}
