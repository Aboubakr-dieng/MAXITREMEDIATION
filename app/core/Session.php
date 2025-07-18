<?php

namespace App\Core;

class Session {

    private static ?Session $session = null;

    private function __construct() {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
    }
public static function getInstance(){
    if(self::$session === null){
        self::$session = new Session();
    }
    return self::$session;
}

public function set(string $key, mixed $data){
        $_SESSION[$key] = $data;
}

public function get(string $key){
        return $_SESSION[$key] ?? null;
 }
     public function unset(string $key): void {
        unset($_SESSION[$key]);
    }

public function isset(string $key){
    return isset($_SESSION[$key]);
}

    public function destroy(): void {
        if(session_status()===PHP_SESSION_ACTIVE){
            session_unset();
            session_destroy();
            self::$session = null;
        }
        //gerer les cookies plus tard

    }
}