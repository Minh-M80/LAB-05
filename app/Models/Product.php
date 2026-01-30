<?php
namespace App\Models;

class Product extends BaseModel {
    public function getAllProducts() {
        $stmt = $this->conn->query("SELECT * FROM students");
        return $stmt->fetchAll();
    }
}
 
