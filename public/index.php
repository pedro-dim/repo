<?php


require_once __DIR__ . '../../vendor/autoload.php';

use App\Core\Router;
use App\Database\Redis;
use App\Database\Sqlite;
use App\Cache\RedisDatabaseCache;
use App\Controllers\ApiController;


$db = new Sqlite('../database.sqlite');

// Prepend a base path if Predis is not available in your "include_path".


$client = new \Predis\Client();



(new RedisDatabaseCache());


//  $client->set('name', 'Ricardo', 'EX', 10);
// $value = $client->get('name');