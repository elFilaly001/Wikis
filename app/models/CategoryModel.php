<?php

namespace App\models;

use App\models\Database;
use PDO;

class CategoryModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getCategories()
    {
        $query = "SELECT * FROM categories";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCategory($categoryName)
    {
        $query = "INSERT INTO categories (cat_name) VALUES (?)";
        $statement = $this->db->prepare($query);
        $statement->execute([$categoryName]);
        return $this->db->lastInsertId();
    }

    public function updateCategory($categoryId, $categoryName)
    {
        $query = "UPDATE categories SET cat_name = ? WHERE cat_id = ?";
        $statement = $this->db->prepare($query);
        return $statement->execute([$categoryName, $categoryId]);
    }

    public function deleteCategory($categoryId)
    {
        $query = "DELETE FROM categories WHERE cat_id = ?";
        $statement = $this->db->prepare($query);
        return $statement->execute([$categoryId]);
    }

    public function countCate()
    {
        $sql = "Select count(*) as Cat from categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results["Cat"];
    }
}
