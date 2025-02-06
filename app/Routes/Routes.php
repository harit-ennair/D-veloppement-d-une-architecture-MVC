<?php

namespace App\Routes;
use App\Controller\ClientController;
use App\Controller\AuthController;


class Routes
{
    public array $routes = [
        "GET" => [
            "/" => [ClientController::class, "index"],
            "/login" => [AuthController::class, "signin"],
            "/register" => [AuthController::class, "signup"],
        ],
        "POST" => [
            "/login" => [AuthController::class, "login"],
            "/register" => [AuthController::class, "register"],
        ]

    ];
    
    public function Dispatch($methode, $uri){

        $this->routes[$methode][$uri];
        try {
            if (isset($this->routes[$methode][$uri])) {
                [$class, $method] = $this->routes[$methode][$uri];
                $handleClass = new $class();
                $handleClass->$method();
            }
        } catch (\Throwable $th) {
            echo "cette path ni pas exists";
        }
    }
}