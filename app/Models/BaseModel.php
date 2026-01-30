<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected PDO $conn;

    public function __construct()
    {
        $host = 'localhost';
        $port = '3309';
        $dbname = 'buoi2_php';
        $username = 'root';
        $password = '';

        try {
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            die("Database connection error");
        }
    }
}
