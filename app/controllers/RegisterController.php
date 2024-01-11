<?php

namespace App\controllers;

use App\models\RegisterModel;

class RegisterController
{

    public function register_control()
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confpass = $_POST["confpassword"];
        $hpass = password_hash($password, PASSWORD_DEFAULT);
        $reg = new RegisterModel();

        if ($password === $confpass) {
            $reg->register($name, $email, $hpass);
            header("Location: /login");
        }
    }
}
