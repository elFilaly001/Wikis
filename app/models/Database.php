<?php

namespace App\models;

require __DIR__ . '/../../config/config.php';

use PDO;

class Database
{
    public $dbHost = DB_HOST;
    public $dbUser = DB_USERNAME;
    public $dbName = DB_NAME;
    public $db;

    public static function connect()
    {
        self::$db = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName . ";username=" . self::$dbUser . "");
        return self::$db;
    }
}
