<?php
class Connexion
{

    private static $servername = "localhost:3306";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "dragon2";
    private static $conn;

    private static function connexion()
    {
        self::$conn = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password, array(PDO::ATTR_PERSISTENT => true));
        // set the PDO error mode to exception
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public static function getConnexion()
    {
        if (!isset(self::$conn)) {
            self::connexion();
        }
        return self::$conn;
    }
}
