<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 16/10/2018
 * Time: 11:52
 */

class Router
{

    protected $routes = [];


    public static function load($file)
    {
        $router = new static();
        require $file;

        return $router;
    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {

        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception("No Routes Defined For This Uri");
    }

}