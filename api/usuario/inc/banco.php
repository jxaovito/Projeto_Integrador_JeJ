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
// require_once(__DIR__ . 'vendor/autoload.php');

// use Dotenv\Dotenv;

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// require "../../../vendor/autoload.php";
// $path = dirname(__FILE__, 4);

// $dotenv = Dotenv\Dotenv::createImmutable($path);
// $dotenv->load();

//   $ENV[VERCEL_FORCE_NO_BUILD_CACHE];

  // $dsn = "mysql:host=aws.connect.psdb.cloud;dbname=cronograma";
  define('DATABASE_HOST','aws.connect.psdb.cloud');
  define('DATABASE_NAME','cronograma');
  define('DATABASE_USER','u16wsjbvfc7ivhtjw79w');
  define('DATABASE_PASSWORD','pscale_pw_S6cvt7oK7BVE9MkdvbwnVhpEIF6rP5RYTFCPOs8cSuh');
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "C:\Users\joaov\Downloads\ca-bundle.crt"
  );
  
   
  // $pdo = new PDO($dsn, $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $options);
  try {
    $pdo = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD, $options);  

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
        var_dump($pdo->query("SHOW STATUS LIKE 'Ssl_cipher';")->fetchAll());
        $pdo = null;
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
}
?>