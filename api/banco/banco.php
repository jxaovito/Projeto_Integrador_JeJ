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

include __DIR__."/../../vendor/autoload.php";

$hostname = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "C:\Users\joaov\Downloads\cacert.pem",
  );
  
    $pdo = new PDO($hostname,$dbName,$username,$password, $options);  

    if ($pdo->connect_error) {
      echo "Not connected to the database";
  } else {
      echo "Successfully connected to the database";
  }
?>