<?php

namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use App\Core\Database;
use App\Entity\Compte;
use App\Entity\Utilisateur;
use PDO;

 class CompteRepository extends AbstractRepository{

    private static ?Database $instance = null;

    private function __construct()
    {
        parent:: __construct();
        $this->table = 'compte';
    }
public static function getInstance(): self{
        $pdo = Database::getInstance();
        // var_dump($pdo);
        // die;

        return new self($pdo);
}

    public function selectAll() {}

    public function insert():void{}
    public function update() {}
    public function delete() {}


    public  function findByUser(Utilisateur $user) {
        $query = 'select * from '.$this->table .'where idutilisateur = :idutilisateur';
        $stmt= $this->pdo->prepare($query);
        $stmt->execute([
            'idutilisateur '=> $user->getId()
        ]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
         var_dump($rows);
        die;

        return array_map(fn($compte)=>Compte::toObject($compte), $rows);
    }
   
    // public function findByTelephone(string $telephone):?Compte {}




//   public function findByUser($user, $is_principale = true):mixed {
//         $sql = "SELECT * FROM compte WHERE idutilisateur = :idutilisateur AND type = :StatutCompte";
//         $stmt = $this->pdo->prepare($sql);
//         $stmt->execute([
//             'idutilisateur' =>  $user->getId(),
//             'StatutCompte' => $is_principale ? 'principal' : 'secondaire'

//         ]);
//         $row=$stmt->fetchAll();
//         return $row ? Utilisateur::toObject($row) : null;

//     }

    }


































    //     public function findByUser(Utilisateur $user, bool $is_principale = true): mixed {
    // $sql = "SELECT * FROM compte WHERE idutilisateur = :idutilisateur AND type = :StatutCompte LIMIT 1";
    // $stmt = $this->pdo->prepare($sql);
    // $stmt->execute([
    //     'idutilisateur' => $user->getId(),
    //     'StatutCompte' => $is_principale ? 'principal' : 'secondaire'
    // ]);

    // $row = $stmt->fetch(); // ✅ Un seul compte
    // return $row ? Compte::toObject($row) : null;
