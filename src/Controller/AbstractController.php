<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    private string $baseDir = __DIR__ . '/../../';

    protected function render(string $template, array $data): void
    {
        extract($data);

        ob_start();

        require sprintf('%s/templates/%s.template.php', $this->baseDir, $template);
        $content = ob_get_clean();

        require sprintf('%s/templates/layout.template.php', $this->baseDir);
    }
}
