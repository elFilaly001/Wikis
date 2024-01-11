<?php

namespace App\models;

use App\models\Database;

class RegisterModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function register($username, $email, $password, $userRole = 'Author')
    {
        $sql = "INSERT INTO users  VALUES (NULL , ? , ? , ? , ? )";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->bindParam(4, $userRole);
        return $stmt->execute();
    }
}
