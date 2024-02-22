 <?php
include __DIR__."/../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$hostname = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
// $ssl = '/etc/pki/tls/certs/ca-bundle.crt';


// $pdo->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$pdo= new PDO('mysql:host='.$hostname.';dbname='.$dbName.";charset=utf8",$username,$password);

?>