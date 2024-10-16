<?php

declare(strict_types = 1);

namespace App\Validator\Image;

use App\Component\Validation\Validator\ValidatorInterface;

class SizeValidator implements ValidatorInterface
{
    public function validate(array $data): bool
    {
        $maxFileSize = 2 * 1024 * 1024; // 2Mb

        if ($data['size'] > $maxFileSize) {
            echo "File is too large. Maximum size is 2MB.";
            return false;
        }

        return true;
    }
}
