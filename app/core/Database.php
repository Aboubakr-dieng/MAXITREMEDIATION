<?php
namespace App\Core;
use PDO;
class Database {
  private static ?PDO $pdo = null;

  private function __construct()
  {
    
  }
  public static function getInstance(): PDO
    {
        if (self::$pdo === null) {
           


            self::$pdo = new PDO(DSN, DB_USER, DB_PASS);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$pdo;
    }

}

