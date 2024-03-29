<?php

require __DIR__ . "/../vendor/autoload.php";

use App\controllers\RouteController;
use App\Core\Middlewares;

use App\Core\Router;

session_start();

$path = $_SERVER["REQUEST_URI"];
$uri = parse_url($path)["path"];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

$route = new Router();

$route->get("/", function () {
    RouteController::Home();
});
$route->get("/login", function () {
    RouteController::Login();
});
$route->get("/register", function () {
    RouteController::Register();
});
$route->get("/Article", function () {
    Middlewares::handleGuest() ? RouteController::Article() : die();
});
$route->get("/Dash", function () {
    Middlewares::handle() ? RouteController::Dashboard() : die();
});
$route->get("/tables", function () {
    Middlewares::handle() ? RouteController::tables() : die();
});
$route->get("/blog", function () {
    RouteController::blog();
});
$route->get("/denied", function () {
    RouteController::denied();
});


$route->post("/post_login", function () {
    RouteController::post_login();
});
$route->post("/post_register", function () {
    RouteController::post_register();
});
$route->post("/post_Wiki", function () {
    RouteController::post_Wiki();
});
$route->post("/search_Wiki", function () {
    RouteController::search_Wiki();
});
$route->post("/search_tags", function () {
    RouteController::search_categ();
});
$route->post("/getWiki", function () {
    RouteController::post_get_wiki();
});
$route->post("/UserDltWiki", function () {
    RouteController::post_delete_wiki();
});
$route->post("/AddCateg", function () {
    RouteController::post_add_Cat();
});
$route->post("/DltCateg", function () {
    RouteController::post_Dlt_cat();
});
$route->post("/UpdCateg", function () {
    RouteController::post_Upd_Cat();
});
$route->post("/AddTag", function () {
    RouteController::post_Add_Tag();
});
$route->post("/UpdTag", function () {
    RouteController::post_Upd_Tag();
});
$route->post("/DltTag", function () {
    RouteController::post_Dlt_Tag();
});
$route->post("/AdminDltWiki", function () {
    RouteController::post_Admin_Dlt_Wiki();
});

$route->call($method, $uri);
