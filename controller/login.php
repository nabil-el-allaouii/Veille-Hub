<?php

// $db = new Database;

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     if(!empty($password) && !empty($email)){
//         $login = new Users($db,"",$email,$password,true);
//         $signIn = $login->login();
//         if($signIn === "successful"){
//             header("location: /dashboard");
//         }
//     }
// }


class LoginController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function showLogin()
    {
        return $this->displayLogin();
    }
    public function index()
    {
        return $this->HandleLogin();
    }

    public function displayLogin()
    {
        require "./view/login.view.php";
    }

    public function HandleLogin()
    {
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";

        if (!empty($email) && !empty($password)) {
            $login = new Users($this->db, "", $email, $password, true);
            $signin = $login->login();
            if ($signin === "successful") {
                header("location:/dashboard");
                exit();
            }else {
                $this->displayLogin();
            }
        }
    }
}
