<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['ccurso']) && $_POST['randcheck']== $_SESSION['rand']) {
    $nomeCurso = $_POST['nomeCurso'];

   
        $sql = $pdo -> prepare("INSERT INTO curso (cod_curso,nome) values (null,?)");

        if($sql -> execute(array($nomeCurso))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }