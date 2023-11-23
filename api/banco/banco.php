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

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$hostname = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
// $dsn = getenv('MYSQL_ATTR_SSL_CA');
// $options = array(
// 	PDO::MYSQL_ATTR_SSL_CA => 'C:\Users\joaov\Downloads\cacert-2023-08-22.pem',
// );

var_dump($_ENV['DB_HOST']);
var_dump($_ENV['DB_NAME']);
var_dump($_ENV['DB_PASSWORD']);
var_dump($_ENV['DB_USERNAME']);



    $pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].";charset=utf8",$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'], $_ENV['PLANETSCALE_SSL_CERT_PATH']);   


?>