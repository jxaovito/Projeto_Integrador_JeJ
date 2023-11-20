<!-- 

//     // CONEXÃO AO BANCO DE DADOS
//     define('DATABASE_HOST','localhost:3307');
//     define('DATABASE_NAME','cronograma');
//     define('DATABASE_USER','jej');
//     define('DATABASE_PASSWORD','xxx');

//     $pdo = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD);   
// ?>
  <?php

  // CONEXÃO AO BANCO DE DADOS DO PLANETSCALE PARA DEPLOY NO VERCEL -- TESTE
// require_once(__DIR__ . 'vendor/autoload.php');

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

require_once "../../vendor/autoload.php";
$path = dirname(__FILE__, 2);

$dotenv = Dotenv\Dotenv::createImmutable($path);
$dotenv->load();

  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "C:\Users\joaov\Downloads\cacert.pem",
  );
  
    $pdo = new PDO($ENV_['DB_HOST'],$ENV_['DB_NAME'],$_ENV['DB_USERNAME'],$ENV_['DB_PASSWORD'], $options);  
    if ($pdo->connect_error) {
      echo "Not connected to the database";
  } else {
      echo "Successfully connected to the database";
  }
?>