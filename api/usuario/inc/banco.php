<?php

    // CONEXÃO AO BANCO DE DADOS
    define('DATABASE_HOST','aws.connect.psdb.cloud');
    define('DATABASE_NAME','cronograma');
    define('DATABASE_USER','u16wsjbvfc7ivhtjw79w');
    define('DATABASE_PASSWORD','pscale_pw_S6cvt7oK7BVE9MkdvbwnVhpEIF6rP5RYTFCPOs8cSuh');
    
    $sslOptions = [
        PDO::MYSQL_ATTR_SSL_CA => 'C:/Users/joaov/Downloads/cacert.pem',
    ];

    $pdo= new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD, $sslOptions);   