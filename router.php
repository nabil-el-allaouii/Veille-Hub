<?php

require "model/Database.php";
require "model/Users.php";
require "model/Student.php";

// $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// $Routes = [
//     "/" => "controller/index.php",
//     "/dashboard" => "controller/dashboard.php",
//     "/login" => "controller/login.php",
//     "/signup" => "controller/signup.php",
//     "/register" => "controller/signup.php",
//     "/signin" => "controller/login.php",
//     "/home" => "controller/index.php"
// ];

// if(array_key_exists($uri,$Routes)){
//     require $Routes[$uri];
// }else{
//     http_response_code(404);
//     require "view/404.view.php";
// }

class router
{
    private array $routes = [];


    public function get(string $path, string $controller)
    {
        $this->routes["GET"][$path] = $controller;
    }
    public function post(string $path, string $controller)
    {
        $this->routes["POST"][$path] = $controller;
    }
    public function resolve()
    {
        $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
        $method = $_SERVER["REQUEST_METHOD"];
        foreach ($this->routes[$method] as $route => $controller) {
            $pattern = preg_replace('/{([\w]+)}/', '([^/]+)', $route);
            $pattern = "#^" . $pattern . "$#";
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                $_GET["id"] = $matches;
                return require $controller;
            }
        }
        http_response_code(404);
        require "view/404.view.php";
    }
}



$route = new router;
$route->get("/", "controller/index.php");
$route->get("/home", "controller/index.php");
$route->get("/dashboard", "controller/dashboard.php");
$route->get("/login", "controller/login.php");
$route->get("/signup", "controller/signup.php");
$route->get("/dashboard/{id}", "controller/dashboard.php");


$route->post("/login", "controller/login.php");
$route->post("/signup", "controller/signup.php");
$route->post("/dashboard", "controller/dashboard.php");
$route->resolve();
