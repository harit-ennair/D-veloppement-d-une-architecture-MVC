<?php

require __DIR__ . '/vendor/autoload.php';

use App\Routes\Routes;

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uriClean = str_replace('/MVC', '', $uri);
$url = parse_url($uriClean,PHP_URL_PATH);

$routes = new Routes;
$routes->Dispatch($method, $url);