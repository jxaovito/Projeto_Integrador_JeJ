<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['cprof'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeProf = $_POST['nomeProf'];

   
        $sql = $pdo -> prepare("INSERT INTO professor (cod_professor,nome) values (null,?)");

        if($sql -> execute(array($nomeProf))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }

