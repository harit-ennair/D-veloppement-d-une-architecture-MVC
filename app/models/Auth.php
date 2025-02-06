<?php 
use App\Database\Database;

class Auth{
    public function login($email){
        $conn = new Database;
        $pdo = $conn::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute([':email'=>$email]);
        $myuser = $stmt->fetch();
        return $myuser;
    }
    public function register($username, $email, $password){
        $conn = new Database;
        $pdo = $conn::getConnection();
        $stmt = $pdo->prepare("INSERT into users(username, email, password) values(:username, :email, :password);");
        $stmt->execute([
            ':username'=>$username,
            ':email'=>$email,
            ':password'=> password_hash($password, PASSWORD_DEFAULT),
        ]);
    }
}