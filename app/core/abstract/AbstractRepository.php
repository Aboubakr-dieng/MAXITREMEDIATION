<?php
namespace App\Core\Abstract;
use App\Core\App;
use App\Core\Database;
use \PDO;

 abstract class AbstractRepository{
    protected PDO $pdo;
    protected string $table;

    protected function __construct(){
        $this->pdo = App::getDependency('Database');

    }


    abstract public function selectAll();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();




}