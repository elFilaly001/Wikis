<?php

namespace App\Core;

class Router
{
    public $route = [];

    public function get($uri, $callback)
    {
        $this->route['get'][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->route['post'][$uri] = $callback;
    }

    public function call($method, $uri)
    {
        if (array_key_exists($uri, $this->route[$method] ?? array())) {
            $this->route[$method][$uri]();
        } else {
            echo "NOT FOUND";
        }
    }
}
