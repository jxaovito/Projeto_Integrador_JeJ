<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['cturma'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeTurma = $_POST['nomeTurma'];
    $nomeCurso = $_POST['hCurso'];
   
        $sql = $pdo -> prepare("INSERT INTO turma (cod_turma,nome,cod_curso) values (null,?,?)");

        if($sql -> execute(array($nomeTurma,$nomeCurso))){
            
        } else {
            
        }     
            }

