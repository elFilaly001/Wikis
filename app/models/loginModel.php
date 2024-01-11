<?php

namespace App\models;

use App\models\Database;
use PDO;

class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function login($email)
    {
        $sql = "SELECT * FROM users WHERE Email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
