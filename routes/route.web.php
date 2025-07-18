<?php
use App\Controller\ClientController;
use App\Controller\SecurityController;
 $route =  [
  '/'=>[
    'controller'=>SecurityController::class,
    'action'=>'index'
  ], 
  '/logout'=>[
    'controller'=>SecurityController::class,
    'action'=>'logout'
  ],
  '/login'=>[
    'controller'=>SecurityController::class,
    'action'=>'login'
  ],
  '/compte/creer'=>[
    'controller'=>SecurityController::class,
    'action'=>'create'
  ],
  '/compte/enregistrer'=>[
    'controller'=> SecurityController::class,
    'action' => 'save'
  ],
  '/client/home'=>[
    'controller' => ClientController::class,
        'middlewares' => ['auth'],
        'action' => 'index'
  ],

];

return $route;
