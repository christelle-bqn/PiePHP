<?php

namespace Core;

class Core
{
    public function __construct()
    {
        require_once("src/routes.php");
    }

    public function run()
    {
        // ROUTAGE DYNAMIQUE/STATIQUE
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url,"/");

        if (($route = Router::get($url)) != null) {
            $controller = "\\Controller\\" . ucfirst($route['controller']) . "Controller";
            $method = $route['action'] . "Action";
            $call = new $controller();
            $call->$method();
        } elseif (($array = RouterDynamic::get($url)) != null) {
            $controller = ucfirst($array[0]);
            $method = $array[1];
            $call = new $controller();
            $call->$method();
        } else {
            echo "ERROR 404 - ROUTE NOT FOUND";
        }
    }
}