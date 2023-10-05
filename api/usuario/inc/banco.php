<?php

    // CONEXÃO AO BANCO DE DADOS
    define('DATABASE_HOST','192.168.0.34:3307');
    define('DATABASE_NAME','cronograma');
    define('DATABASE_USER','jej');
    define('DATABASE_PASSWORD','xxx');
    

    $pdo= new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.";charset=utf8",DATABASE_USER,DATABASE_PASSWORD);   