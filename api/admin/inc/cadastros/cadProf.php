<?php

include_once(dirname(__FILE__) . "../../../../banco/banco.php");

if (isset($_GET['cod_turma'])){
    $codTurma = $_GET['cod_turma'];
 } else {
    $codTurma = "";
 }
 
 if (isset($_GET['cod_curso'])){
     $codCurso = $_GET['cod_curso'];
  } else {
     $codCurso = "";
  }

if (isset($_POST['cprof'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeProf = $_POST['nomeProf'];

   
        $sql = $pdo -> prepare("INSERT INTO professor (cod_professor,nome,cod_curso,cod_turma) values (null,?,$codCurso,$codTurma)");
 
            }

