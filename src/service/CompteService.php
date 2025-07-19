<?php

namespace App\Service;
use App\Core\App;
use App\Repository\CompteRepository;

class CompteService {

    private static ?CompteService $compteService = null;
    private  CompteRepository $compteRepository;

    

    public function __construct(){
         
        $this->compteRepository = App::getDependency('CompteRepository');
        
    }

    public static function getInstance()
    {
        if(self::$compteService === null){
            self::$compteService = new CompteService();
        }
        return self::$compteService;
    }

    public function getComptesByUser($user){
        $this->compteRepository->findByUser($user);
    }

}
