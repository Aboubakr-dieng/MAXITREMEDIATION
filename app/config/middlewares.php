<?php
namespace App\Config;
use App\Core\Middlewares\Auth;
use App\Core\Middlewares\CryptPassword;

 $middlewares = [
           "auth" => Auth::class,
     //    "cryptPassword" => CryptPassword::class,
];
return $middlewares;

