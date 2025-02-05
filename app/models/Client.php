<?php 
include $_SERVER['DOCUMENT_ROOT'].'../vendor/autoload.php';

use App\Database\Database;


class Client extends user{

    public function register($name ,$email ,$password){
        $db= new Database();
        $pdo = $db::getConnection();

        $stmt = $pdo->prepare('INSERT INTO users(username,email,password) values(:name, :email, :password);');
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $password,
        ]);
    }
}