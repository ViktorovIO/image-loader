<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\ImageService;

class IndexController extends AbstractController
{
    public function __construct(private readonly ImageService $imageService) {}

    public function index(): void
    {
        $this->render('index', ['years' => $this->imageService->getAll()]);
    }

    public function add(): void
    {
        //
    }

    public function delete(): void
    {
        //
    }
}
