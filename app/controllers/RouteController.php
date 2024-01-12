<?php


namespace App\controllers;

use App\controllers\loginController;
use App\controllers\RegisterController;

class RouteController
{
    public static function Home()
    {
        require __DIR__ . "/../../veiw/author/index.php";
    }
    public static function Login()
    {
        require __DIR__ . "/../../veiw/component/login.php";
    }
    public static function Register()
    {
        require __DIR__ . "/../../veiw/component/register.php";
    }
    public static function Article()
    {
        require __DIR__ . "/../../veiw/author/Article.php";
    }
    public static function Dashboard()
    {
        require __DIR__ . "/../../veiw/admin/index.php";
    }
    public static function forms()
    {
        require __DIR__ . "/../../veiw/admin/forms.php";
    }
    public static function tables()
    {
        require __DIR__ . "/../../veiw/admin/tables.php";
    }
    public static function blog()
    {
        require __DIR__ . "/../../veiw/author/blog.php";
    }
    public static function post_login()
    {
        $log = new loginController();
        $log->login_control();
    }
    public static function post_register()
    {
        $log = new RegisterController();
        $log->register_control();
    }
    public static function post_Wiki()
    {
        $log = new WikisController();
        $log->addWiki();
    }
    public static function search_Wiki()
    {
        $log = new WikisController();
        $log->showWikis();
    }
    public static function search_categ()
    {
        $log = new CategoryController();
        $log->showWikisByCat();
    }
    public static function post_show_wiki()
    {
        $log = new WikisController();
        $log->showWiki();
    }
}
