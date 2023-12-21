<?php


require_once  '../vendor/autoload.php';

use App\Core\Router;
use League\Plates\Engine;
use App\Controllers\HomeController;


require "../app/Core/container.php";
require "../app/Routes/web.php";


//dd($container);

(new HomeController(new Engine()))::view('home', 'Pages', ["name" => "Pedro"]);
