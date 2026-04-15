<?php
class Database
{
    private static $pdo = null;

    public static function connect()
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO(
                "mysql:host=localhost;dbname=laravel_zcapital;charset=utf8mb4",
                "root",
                "@dmin",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }

        return self::$pdo;
    }
}