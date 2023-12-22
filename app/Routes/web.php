<?php

use App\Router\Router;
use App\Controllers\HomeController;




(new Router)->get('/', [HomeController::class, 'index']);
