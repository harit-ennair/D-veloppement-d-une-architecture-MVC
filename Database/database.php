<?php
namespace Database;
use PDO;
use PDOException;
class Database {
    private static $host = "localhost";
    private static $db_name = "MVC";
    private static $username = "postgres";
    private static $password = "root";
    private static $conn = null;

    public static function getConnection() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO("pgsql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
                self::$conn->exec("set names utf8");
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return self::$conn;
    }
}