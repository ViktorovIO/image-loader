<?php

declare(strict_types=1);

namespace App\Component\Validation\Validator;

interface ValidatorInterface
{
    public function validate(array $data): bool;
}
