<?php

use DI\Container;



$container = new Container;


$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__FILE__, 3));
$dotenv->safeLoad();
