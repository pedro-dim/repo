<?php

namespace App\Router;




class Router
{

    //public $routes = [];

    public $controllerNamespace = '\\app\\Controllers\\';
    public $controller;
    public $action;


    public function __construct()
    {
    }


    public function __invoke()
    {
    }


    public  function get($uri, $controller = [])
    {




        $this->controller = explode('\\', $controller[0]);
        $this->action = $controller[1];
        //dd($this->action);

        if (!$_SERVER['REQUEST_URI'] == $uri) {

            throw new \Exception("This $uri does not exists ");
        }


        if (!file_exists($this->controllerNamespace . $this->controller[2] . '.php')) {

            //  dd($this->controllerNamespace . $this->controller[2] . '.php');
            throw new \Exception("This " . $this->controllerNamespace . $this->controller[2] . ".php does not exists");
        }

        include  $this->controllerNamespace . $this->controller[2] . ".php";
        //  $cont = new $this->controller[2];
        $class = new $this->controllerNamespace . $this->controller[2]();
    }
}