<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Core\Validator;
use App\Service\SecurityService;
use Symfony\Component\Yaml\Yaml;


class SecurityController extends AbstractController{

  private SecurityService $securityService;


  public function __construct(){
    parent::__construct();
      $this->layout = 'security';
    $this->securityService = App::getDependency('SecurityService');

  }
  public function index(){
    $this->renderHtml('auth/login');
  }
  public function store(){

  }
  public function edit(){

  }
  public function create(){

  }
  public function login( ){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      //Validation à faire 
      $post = [
        'login' => trim($_POST['login'] ?? ''),
        'password' => trim($_POST['password'] ?? '')
      ];
      
      Validator::validate($post, [
        'login'=>['required','senegal_phone'],
        'password'=>['required']
      ]);
     
      if(Validator::isValid()){
        extract($post);
        $user = $this->securityService->seConnecter($login, $password);

        if ($user){
          $this->session->set('user', $user->toArray());

          header('Location: /client/home');
          var_dump('ok');
          die;
          exit();

        }else{

          Validator::addError('globalError', 'login ou mot de passe incorrect');
          $this->session->set('errors', Validator::getErrors());
           header('Location: /');
            exit();
        }
      
      }
      $this->session->set('errors', Validator::getErrors());
           header('Location: /');
            exit();
    }
    $this->renderHtml('auth/login');
  }

  public function logout( ){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $this->session->destroy();
        header('Location:/');
      exit;
        
    }
        header('Location: /client/home');
    exit;


  }
}


