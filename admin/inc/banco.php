  <?php
    define('DATABASE_HOST', "localhost:3308");
    define('DATABASE_NAME', "aula_admin");
    define('DATABASE_USER', "aluno");
    define('DATABASE_PASSWORD', "senac");

    $pdo = new PDO("mysql:host=".DATABASE_HOST.";dbname=".DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);


   ?>