<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Entity\Utilisateur;
use App\Service\CompteService;
use App\Service\SecurityService;

class ClientController extends AbstractController
{
    private CompteService $compteService;

    public function __construct()
    {
    parent:: __construct();
        $this->layout = 'base';
        $this->compteService = App::getDependency('CompteService');
    }

  public function index(){
    $user = $this->session->get('user');
 
    $utilisateur= Utilisateur::toObject($user);
    $data = [];

    $this->renderHtml('client/dashboard');
  }


public function store()
{

}
 public function edit(){}
 public function create(){}
  
}


  // public function index(){
  //   $user = $this->session->get('user');
  //   $user->Utilisateur::toObject($user);
  //   $data = [];

  //   $this->renderHtml('client/dashboard');
  // }

    // $id=$session->set("")
    // $compte = $compteservice->selbyid($id);

    // $this->renderHtml('client/dashboard',[
    //   'compte'=>$compte
    // ]);