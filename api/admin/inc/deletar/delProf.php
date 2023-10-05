<?php

include_once(dirname(__FILE__). "/../banco.php");

// PUXA CODIGO DA TURMA E CURSO
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

//   DELETAR PROFESSORES NA LISTA
    if(isset($_GET ['id'])){
        $cod_professor = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM professor WHERE cod_professor =?");
        if($sql->execute(array($cod_professor))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                header('location:../../prof.php?cod_curso='.$codCurso."&cod_turma=".$codTurma);
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }


?>
