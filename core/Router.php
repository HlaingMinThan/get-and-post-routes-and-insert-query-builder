<?php

class Router
{
    public $routes=[
        "GET"=>[
            // "/about"=>"controllers/AboutController.php"
        ],
        "POST"=>[
            // '/names'=>'contrllers/add-name.php'
        ]
    ];
    // [
    //     ""=>"controllers/IndexController.php",
    //     "about"=>"controllers/AboutController.php",
    //     "contact"=>"controllers/ContactController.php",
    // ]
    public static function load($filename)
    {
        $router=new Router;
        require $filename;
        return $router;
    }
    public function register($routes)
    {
        $this->routes=$routes;
    }
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri]=$controller;
    }
    public function direct($uri, $method) //about ,GET
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return  $this->routes[$method][$uri];
            // controllers/IndexController.php
        }
        die("404 page");
    }
}
