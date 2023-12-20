<?php


require_once  '../vendor/autoload.php';

use App\Core\Router;
use App\Database\Redis;
use App\Database\SQLite;
use App\Cache\RedisDatabaseCache;
use App\Controllers\ApiController;
use App\Database\Mysql;
use  \Predis\Client;



require "../app/Routes/web.php";



$database = new Mysql();

$database->connect();
$data = $database->query('SELECT * FROM  users');
