<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\userController;
use Core\Router;

$route = new Router;
echo $route->routeStart();
