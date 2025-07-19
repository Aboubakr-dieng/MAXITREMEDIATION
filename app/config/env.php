<?php

// Charger .env une seule fois
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

// Définir les constantes d'environnement
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_DRIVER', $_ENV['DB_DRIVER']);
define('WEB_ROUTE', $_ENV['WEB_ROUTE']);

define('DSN', $_ENV['DSN']);

define('BASE_DSN_MYSQL', $_ENV['BASE_DSN_MYSQL']);
define('BASE_DSN_PGSQL', $_ENV['BASE_DSN_PGSQL']);

