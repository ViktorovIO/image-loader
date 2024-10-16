<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\IndexController;
use App\Service\ImageService;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$imageService = new ImageService();
$indexController = new IndexController($imageService);

switch ($requestUri) {
    case '/':
        $indexController->index();
        break;
    case '/add':
        $indexController->add();
        break;
    case '/delete':
        $indexController->delete();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo "Страница не найдена!";
        break;
}
