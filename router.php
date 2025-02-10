<?php

require_once "model/Database.php";
require_once "model/Users.php";
require_once "model/Student.php";


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

require_once "controller/login.php";
require_once "controller/signup.php";
require_once "controller/dashboard.php";
require_once "controller/admin.php";

class router
{
    private array $routes = [];


    public function get(string $path, array|string $controller)
    {
        $this->routes["GET"][$path] = $controller;
    }
    public function post(string $path, array|string $controller)
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
            if (preg_match($pattern, $uri, $matches) || preg_match("#^" . $route . "$#", $uri)) {
                if (isset($matches[0])) {
                    array_shift($matches);
                    $param = $matches;
                } else {
                    $param = [];
                }
                if (is_array($controller)) {
                    $classname = $controller[0];
                    $function = $controller[1];
                    $instance = new $classname();
                    $instance->$function($param);
                    return;
                } else {
                    include $controller;
                    return;
                }
            }
        }
        http_response_code(404);
        require "view/404.view.php";
    }
}


$route = new router;
$route->get("/", "controller/index.php");
$route->get("/dashboard", [StudentDashboardController::class , 'showDashboard']);
$route->get("/signup", [SignupController::class, 'ShowSignup']);
// $route->get("/dashboard/{id}", "controller/dashboard.php");
$route->get("/login",  [LoginController::class, 'showLogin']);
$route->get("/Admin",  [AdminController::class, 'showDashboard']);


$route->post('/login', [LoginController::class, 'index']);
$route->post("/signup", [SignupController::class, 'HandleSignup']);
$route->post("/dashboard", [StudentDashboardController::class , 'SuggestVeille']);
$route->post("/dashboard/Delete", [StudentDashboardController::class , 'DeleteSuggested']);
$route->resolve();
