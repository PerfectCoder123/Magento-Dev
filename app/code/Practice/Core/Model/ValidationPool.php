<?php
namespace Practice\Core\Model;

use Practice\Core\Model\ValidatorInterface;

class ValidationPool
{
    /**
     * @var ValidatorInterface[]
     */
    private $validators;

    public function __construct(array $validators = [])
    {
        $this->validators = $validators;
    }

    public function process(string $input): void
    {
        foreach ($this->validators as $validator) {
            $validator->validate($input);
        }
    }
}
