<?php

namespace App\Service;
use App\Repository\CompteRepository;

class CompteService {

    private static ?CompteService $compteService = null;
    

    public function __construct(){
        
    }

    public function getInstance()
    {
        if(self::$compteService === null){
            self::$compteService = new CompteService();
        }
        return self::$compteService;
    }

    public function getPrincipalByUser($user){
        $this->compteService->findByUser();
    }

}
