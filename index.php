<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';

switch ($page) {
    case 'product-list':
        (new ProductController())->index();
        break;

    case 'product-add':
        (new ProductController())->create();
        break;

    case 'product-store':
        (new ProductController())->store();
        break;

    case 'product-edit':
        (new ProductController())->edit();
        break;

    case 'product-update':
        (new ProductController())->update();
        break;

    case 'product-delete':
        (new ProductController())->delete();
        break;

    case 'product-detail':
        (new ProductController())->detail();
        break;

    default:
        echo "404 Not Found";
}
