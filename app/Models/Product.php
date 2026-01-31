<?php
namespace App\Models;

class Product extends BaseModel
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM students";
        return $this->conn->query($sql)->fetchAll();
    }

    public function findById($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM students WHERE id = ?"
        );
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO students (fullname, student_code, email)
             VALUES (?, ?, ?)"
        );
        $stmt->execute([
            $data['fullname'],
            $data['student_code'],
            $data['email']
        ]);
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare(
            "UPDATE students
             SET fullname=?, student_code=?, email=?
             WHERE id=?"
        );
        $stmt->execute([
            $data['fullname'],
            $data['student_code'],
            $data['email'],
            $id
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM students WHERE id=?"
        );
        $stmt->execute([$id]);
    }
}
