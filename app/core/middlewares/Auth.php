<?php
namespace App\Core\Middlewares;

use App\Core\App;
use App\Core\Session;

 

class Auth{
    private Session $session;
    public function __invoke(){
        $this->session = App::getDependency('Session');
        if (!$this->session->isset('user')){
           header('Location: /');
           exit;

        }
    }

}