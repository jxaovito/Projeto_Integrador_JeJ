<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['cturma'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeTurma = $_POST['nomeTurma'];

   
        $sql = $pdo -> prepare("INSERT INTO turma (cod_turma,nome) values (null,?)");

        if($sql -> execute(array($nomeTurma))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }

