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
                $_SESSION["roleuser"] =  $result['user_Role'];
                header("Location: /");
            } elseif ($result["user_Role"] == "Admin") {
                $_SESSION["roleuser"] =  $result['user_Role'];
                $_SESSION["user_id"] =  $result['user_id'];
                header("Location: /Dash");
            }
        } else {
            header("Location: /login");
        }
    }
}
