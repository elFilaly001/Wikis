<?php

namespace App\Core;

class Middlewares
{
    public static function handle()
    {
        if ($_SESSION['roleuser'] === "Author") {
            header("Location: /denied");
            return false;
        } elseif (!isset($_SESSION['roleuser'])) {
            header("Location: /login");
            return false;
        } else {
            return true;
        }
    }
    public static function handleGuest()
    {
        if (!isset($_SESSION['roleuser']) || $_SESSION["roleuser"] = '') {
            header("Location: /login");
            return false;
        } else {
            return true;
        }
    }
}
