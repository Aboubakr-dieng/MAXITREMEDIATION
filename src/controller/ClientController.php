<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Service\SecurityService;

class ClientController extends AbstractController {
  
  private SecurityService $securityService;


  public function __construct(){
      $this->layout = 'client';
    $this->securityService = App::getDependency('SecurityService');

  }
  public function index(){

    $data = [];

    $this->renderHtml('client/dashboard');
  }
  public function store(){

  }
  public function edit(){

  }
  public function create(){

  }
}




    // $id=$session->set("")
    // $compte = $compteservice->selbyid($id);

    // $this->renderHtml('client/dashboard',[
    //   'compte'=>$compte
    // ]);