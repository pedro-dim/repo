<?php

require_once  '../vendor/autoload.php';

use App\Core\Router;
use League\Plates\Engine;
use App\Controllers\HomeController;

use Illuminate\Hashing\BcryptHasher;


require '../app/Core/bootstrap.php';







require "../app/Core/container.php";
require "../app/Routes/web.php";



//(new HomeController(new Engine()))->view('home', 'Pages', ["name" => "Pedro", "age" => 34]);