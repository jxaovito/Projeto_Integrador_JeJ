<?php

include_once(dirname(__FILE__). "/../banco.php");

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


if (isset($_POST['cdisciplina'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeDisciplina = $_POST['nomeDisciplina'];
    $nomeCor = $_POST['nomeCor'];

   
        $sql = $pdo -> prepare("INSERT INTO disciplina (cod_disciplina,nome,cor,cod_curso) values (null,?,?,$codCurso)");

        if($sql -> execute(array($nomeDisciplina,$nomeCor))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }
?>