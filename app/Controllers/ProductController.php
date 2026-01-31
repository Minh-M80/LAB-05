<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $products = (new Product())->getAllProducts();
        include __DIR__ . '/../../views/product_list.php';
    }

    public function create() {
        include __DIR__ . '/../../views/product_add.php';
    }

    public function store() {
        if (
            empty($_POST['fullname']) ||
            empty($_POST['student_code']) ||
            empty($_POST['email'])
        ) {
            die("Không được để trống dữ liệu");
        }

        (new Product())->insert($_POST);
        header("Location: index.php?page=product-list");
    }

    public function edit() {
        $product = (new Product())->findById($_GET['id']);
        include __DIR__ . '/../../views/product_edit.php';
    }

    public function update() {
        (new Product())->update($_GET['id'], $_POST);
        header("Location: index.php?page=product-list");
    }

    public function delete() {
        (new Product())->delete($_GET['id']);
        header("Location: index.php?page=product-list");
    }

    public function detail() {
        $product = (new Product())->findById($_GET['id']);
        include __DIR__ . '/../../views/product_detail.php';
    }
}
