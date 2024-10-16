<?php

declare(strict_types = 1);

namespace App\Validator\Image;

use App\Component\Validation\Validator\ValidatorInterface;

class ExtensionValidator implements ValidatorInterface
{
    public function validate(array $data): bool
    {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExtension = strtolower(pathinfo($data['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "Invalid file extension. Only JPG, JPEG, PNG, and GIF are allowed.";
            return false;
        }

        return true;
    }
}
