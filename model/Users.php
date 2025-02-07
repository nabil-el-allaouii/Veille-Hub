<?php

class Users
{
    private $username;
    private $email;
    private $password;
    protected $db;
    private const REGISTRATION_SUCCESFULL = "registered successfully";
    private const REGISTRATION_FAILED = "User Already Exist!";
    private const LOGIN_SUCCESSFUL = "successful";
    private const LOGIN_INVALID = "Invalid Email Or Password";

    public function __construct($db, $username, $email, $password,$isLogin)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $this->password = $isLogin ? $password : password_hash($password, PASSWORD_BCRYPT);;
        $this->db = $db;
    }

    public function register()
    {
        $email = $this->db->query(
            "SELECT * from users where user_email = :email",
            [":email" => $this->email]
        );
        $EmailAlr = $email->fetch();
        if ($EmailAlr) {
            return self::REGISTRATION_FAILED;
        }

        $signup = $this->db->send(
            "INSERT into users(user_name,user_email,user_password) values(:user_name,:user_email,:user_password)",
            [
                ":user_name" => $this->username,
                ":user_email" => $this->email,
                ":user_password" => $this->password
            ]
        );
        return self::REGISTRATION_SUCCESFULL;
    }


    public function login(){
        $email = $this->db->query("SELECT * from users where user_email = :email" , [":email" => $this->email]);
        $user = $email->fetch();
        if(!$user){
            return self::LOGIN_INVALID;
        }

        if(password_verify($this->password, $user["user_password"])){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['user_email'] = $user['user_email'];
            return self::LOGIN_SUCCESSFUL;
        }

        return self::LOGIN_INVALID;
    }
}
