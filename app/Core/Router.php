<?php

namespace App\Core;




class Router
{

    public $r;




    //$path, $controller, $method

    public function __invoke($path)
    {
        $this->r = require_once __DIR__ . '/routes.php';



        if (array_key_exists($path, $this->r)) {

            echo $this->r[$path];
        }
    }
}
