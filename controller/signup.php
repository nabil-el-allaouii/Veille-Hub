<?php 

$db = new Database;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(!empty($username)&&!empty($email)&&!empty($password)){
        $signup = new Users($db,$username,$email,$password,"");
        $message = $signup->register();
    }
}

require "./view/signup.view.php";