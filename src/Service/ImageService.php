<?php

declare(strict_types=1);

namespace App\Service;

class ImageService
{
    private string $baseDir = __DIR__ . '/../../';

    public function getAll(): array
    {
        return $this->getFiles($this->baseDir . 'storage');
    }

    public function upload($file): ?string
    {
//        $this->validate($file);

        $uploadDir = '/storage/' . date('Y/m/d') . '/';
        $uploadPath = __DIR__ . '/../img' . $uploadDir;

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $newFileName = uniqid() . '.' . $fileExtension;
        $targetFile = $uploadPath . $newFileName;

        if (file_exists($targetFile)) {
            echo "File with the same name already exists.";
            return null;
        }

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $uploadDir . $newFileName;
        }

        return null;
    }

    public function deleteYear($year): void
    {
        $dirPath = sprintf('%s/storage/%s', $this->baseDir, $year);
        if (is_dir($dirPath)) {
            array_map('unlink', glob("$dirPath/*/*"));
            rmdir($dirPath);
        }
    }

    private function getFiles(string $dir): array
    {
        $result = [];
        $items = scandir($dir);
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            if (
                str_contains($item, '.jpg')
                || str_contains($item, '.jpeg')
                || str_contains($item, '.png')
                || str_contains($item, '.gif')
            ) {
                $result[] = $item;
            } else {
                $result[$item] = $this->getFiles($dir . '/' . $item);
            }
        }

        return $result;
    }
}
