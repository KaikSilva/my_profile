<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ ."/Source/App/Web.php";

use CoffeeCode\Router\Router;


$router = new Router("http://localhost/myProfile");
$router->namespace("Source\App");

$router->group(null);
$router->get("/" , "Web:home");
$router->dispatch();
