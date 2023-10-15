<?php

    // CONEXÃO AO BANCO DE DADOS
    // define('DATABASE_HOST','aws.connect.psdb.cloud');
    // define('DATABASE_NAME','cronograma');
    // define('DATABASE_USER','u16wsjbvfc7ivhtjw79w');
    // define('DATABASE_PASSWORD','pscale_pw_S6cvt7oK7BVE9MkdvbwnVhpEIF6rP5RYTFCPOs8cSuh');
    
    // $sslOptions = [
    //     PDO::MYSQL_ATTR_SSL_CA => 'C:\Users\joaov\Downloads\ca-bundle.crt',
    // ];

    // $pdo= new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD);   
?>
  <?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $path = dirname(__FILE__, 3);

// $dotenv = Dotenv\Dotenv::createImmutable($path);
// $dotenv->load();

  $ENV[VERCEL_FORCE_NO_BUILD_CACHE];

  $dsn = "mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_NAME"]}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "C:\Users\joaov\Downloads\ca-bundle.crt",
  );
  $pdo = new PDO($dsn, $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $options);
?>