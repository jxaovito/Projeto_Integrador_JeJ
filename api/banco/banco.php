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

// // $hostname = getenv('DB_HOST');
// // $dbName = getenv('DB_NAME');
// // $username = getenv('DB_USERNAME');
// // $password = getenv('DB_PASSWORD');
// // $dsn = getenv('MYSQL_ATTR_SSL_CA');
// // $options = array(
// // 	PDO::MYSQL_ATTR_SSL_CA => 'C:\Users\joaov\Downloads\cacert-2023-08-22.pem',
// // );

// var_dump($_ENV['DB_HOST']);
// var_dump($_ENV['DB_NAME']);
// var_dump($_ENV['DB_PASSWORD']);
// var_dump($_ENV['DB_USERNAME']);

//     $pdo = new PDO(getenv('DB_HOST'),getenv('DB_NAME'),getenv('DB_USERNAME'),getenv('DB_PASSWORD'),getenv('MYSQL_ATTR_SSL_CA'));   
//

$hostname = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$ssl = $_ENV['MYSQL_ATTR_SSL_CA'];


$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$mysqli->real_connect($hostname, $username, $password, $dbName);


if ($mysqli->connect_error) {
    echo 'Erro ao conectar no banco de dados';
} else {
    echo "Conectado com sucesso";
}?>