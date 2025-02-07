<?php 

$db = new Database;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(!empty($password) && !empty($email)){
        $login = new Users($db,"",$email,$password,true);
        $signIn = $login->login();
        if($signIn === "successful"){
            header("location: /dashboard");
        }
    }
}

require "./view/login.view.php";