<?php
namespace App\Service;

use App\Core\App;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;

class SecurityService
{
    private static ?SecurityService $instance = null;
    private UtilisateurRepository $utilisateurRepository;
    private function __construct()
    {
        $this->utilisateurRepository = App::getDependency('UtilisateurRepository');
    }

    public static function getInstance() {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function seConnecter( $login,$password):?Utilisateur{
        $user = $this->utilisateurRepository->findByLogin($login);

                // Vérifier si l'utilisateur existe dans la base de données
                if(!$user  || !($user->getPassword() === $password)){
                    
                    
            return null;
                }
            return $user;

    }
    
        
    

}