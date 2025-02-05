<?php
namespace Database;
use PDO;
use PDOException;
class Database {
    private static $host = "localhost";
    private static $db_name = "MVC";
    private static $username = "postgres";
    private static $password = "";
    private static $port = 5432;
    private static $conn = null;

    public static function getConnection() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO("pgsql:host=" . self::$host . ";port=".self::$port.";dbname=" . self::$db_name, self::$username, self::$password);
                self::$conn->exec("set names utf8");
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return self::$conn;
    }
}