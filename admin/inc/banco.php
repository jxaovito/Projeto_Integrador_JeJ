
<?php

    define('DATABASE_HOST','10.10.134.153:3308');
    define('DATABASE_NAME','cronograma');
    define('DATABASE_USER','jej');
    define('DATABASE_PASSWORD','senac');

    $pdo= new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD);   

