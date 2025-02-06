<?php 

namespace App\Controller;

use Auth;

class AuthController{

    public function register(){
        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $newUser = new Auth;
            $newUser->register($username, $email, $password);
            header('Location: MVC/login');
        
    }
    public function signup() {
        require_once  __DIR__.'/../View/page/register.php';
    }

    public function signin() {
        require_once  __DIR__.'/../View/page/login.php';
    }

    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        session_start();
        $user = new Auth();
        $myUser = $user->login($email);

        if(!$myUser || !password_verify($password,$myUser["password"])){
            echo '<script>alert("the email or password is not correct")</script>';
            return;
        }else{
    
            $_SESSION["user_id"]=$myUser["user_id"];
            $_SESSION["email"]=$myUser["email"];
    
            header('location: /Tasks');
        }

    }

}

