<?php 

namespace App\Models;
include $_SERVER['DOCUMENT_ROOT'].'../vendor/autoload.php';

use Database\Database;
use App\models\User;




class Client extends User {
    private $conn;
    private $table_name = 'users';

  
    public function __construct($db) {
        $this->conn = $db;
    }

    // Créer un nouvel utilisateur
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (username, email, password)
                  VALUES (:username, :email, :password)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
  

        return $stmt->execute();
    }

    // Lire les utilisateurs
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
