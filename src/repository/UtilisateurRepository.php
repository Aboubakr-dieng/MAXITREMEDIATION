<?php

namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use App\Entity\Utilisateur;

 class UtilisateurRepository extends AbstractRepository{
    private static ?UtilisateurRepository $instance = null;
    private function __construct(){
        parent::__construct();

    }


     public function selectAll(){}
     public function insert(){}
     public function update(){}
     public function delete(){}
     public function selectById(){}
     public function selectBy(){}

     public static function getInstance(){
        if(self::$instance === null){
           self::$instance = new self();
        }
        return self::$instance;
    }
    public function findByLogin( $login):Utilisateur|null{
        $query = 'SELECT * FROM Utilisateur
        WHERE login = :login';
        $stmt = $this->pdo->prepare( $query);
        $stmt->bindParam('login', $login);
        $stmt->execute();
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        
        return $row ? Utilisateur::toObject($row):null;
    }
}