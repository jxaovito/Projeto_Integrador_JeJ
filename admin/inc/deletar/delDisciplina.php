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

    if(isset($_GET ['id'])){
        $cod_disciplina = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM disciplina WHERE cod_disciplina =?");
        if($sql->execute(array($cod_disciplina))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                header('location:../../disciplina.php?cod_curso='.$codCurso."&cod_turma=".$codTurma);
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }


?>
