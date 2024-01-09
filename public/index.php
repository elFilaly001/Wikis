<?php

require __DIR__ . "/../vendor/autoload.php";

use App\controllers\RouteController;
use App\Core\Router;

$path = $_SERVER["REQUEST_URI"];
$uri = parse_url($path)["path"];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

$route = new Router();

$route->get("/", function () {
    RouteController::Home();
});

$route->call($method, $uri);
