<?php

namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use App\Entity\Compte;
use App\Entity\Utilisateur;

 class CompteRepository extends AbstractRepository{

    private static ?CompteRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getInstance(){

        if(self::$instance = null){
            self::$instance = new CompteRepository();
        }
        return self::$instance;

    }

    public function selectAll() {}

    public function insert():void{}
    public function update() {}
    public function delete() {}
    public function selectById() {}
    public function selectBy() {

    }

      public function findAll(array $filter) : array {
        return [];
    }

    // public function findById(): ?Compte {

    //     return null;
    // }
   
    public function findByTelephone(string $telephone):?Compte {}




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
