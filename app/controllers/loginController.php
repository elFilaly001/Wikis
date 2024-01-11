<?php

namespace App\controllers;

use App\models\LoginModel;

class loginController
{
    public function login_control()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $login = new LoginModel();
        $result = $login->login($email);
        if (password_verify($password, $result['user_pwd'])) {
            if ($result["user_Role"] == "Author") {
                $_SESSION["email"] =  $result['Email'];
                $_SESSION["user_id"] =  $result['user_id'];
                header("Location: /");
            }
        } else {
            header("Location: /login");
        }
    }
}
