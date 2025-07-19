<?php

namespace App\Migration;


use App\Core\App;
use Exception;
use PDO;

class Migration{
    private PDO $pdo;
    private string $driver;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
        $this->driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
    }

    public  function run(){
        $this->createDatabase();
        $this->createTables();
        echo 'migration reussi';

    }

    private function createDatabase(){
        if($this->driver === 'mysql'){
            $this->pdo->exec('CREATE DATABASE IF NOT EXISTS ' . DB_NAME);
            $this->pdo->exec('USE '.DB_NAME);
        }elseif($this->driver === 'pgsql'){
            try{
                $pdo = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=postgres', DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
                $pdo->exec("SELECT 'CREATE DATABASE " . DB_NAME ."' WHER NOT EXIST (
                SELECT FROM pg_database where datname = '" . DB_NAME ."' )\gexec");
            
            }
        }

    }

    private function createTables(){
        $sql= match($this->driver){
            'mysql' =>file_get_contents(__DIR__ .'/../database/script_mysql.sql'),
            'pgsql' =>file_get_contents(__DIR__ .'/../database/script_postgres.sql'),
            default=>throw new Exception('driver non supporter '.$this->driver )
        };
        $this->pdo->exec($sql);
    }
}