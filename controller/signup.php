<?php

// $db = new Database;

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $username = $_POST["username"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     if(!empty($username)&&!empty($email)&&!empty($password)){
//         $signup = new Users($db,$username,$email,$password,"");
//         $message = $signup->register();
//     }
// }

class SignupController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ShowSignup()
    {
        require "./view/signup.view.php";
    }
    public function HandleSignup()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (!empty($username) && !empty($email) && !empty($password)) {
            $signup = new Users($this->db, $username, $email, $password, "");
            $signup->register();
            return $this->ShowSignup();
        }
    }
}
