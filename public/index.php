<?php


require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../routes/route.web.php';
require_once __DIR__ .'/../app/config/bootstrap.php';

use App\Core\Database;
use App\Core\Router;
use Symfony\Component\Yaml\Yaml;

Router::resolver();

// $pdo=Database::getInstance();

// $STMT = $pdo->prepare('SELECT * FROM utilisateur');
// $STMT->execute();
// $users = $STMT->fetchAll();
// var_dump($users);