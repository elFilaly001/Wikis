<?php

namespace App\models;

require __DIR__ . '/../../config/config.php';

use PDO;

class Database
{
    public static $db;
    public static $dbHost = DB_HOST;
    public static $dbUser = DB_USERNAME;
    public static $dbName = DB_NAME;
    public static $dbPWD = DB_PASSWORD;

    public static function connect()
    {
        self::$db = new PDO("mysql:host=" . static::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPWD);
        return self::$db;
    }
}
