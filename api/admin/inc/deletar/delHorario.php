<?php

include_once(dirname(__FILE__). "../../../../banco/banco.php");

// PUXA TURMA E CURSO PELO CÓDIGO
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

//   DELETA HORÁRIO DE AULAS
    if(isset($_GET ['id'])){
        $cod_calendario = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM calendario WHERE cod_calendario =?");
        if($sql->execute(array($cod_calendario))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                // VOLTA À PAGINA DO CALENDARIO
                header("location:../../../admin/cronograma.php?cod_curso=".$codCurso."&cod_turma=".$codTurma);
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }
    if(isset($_GET ['id'])){
        $cod_feriado = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM feriado WHERE cod_feriado =?");
        if($sql->execute(array($cod_feriado))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                // VOLTA À PAGINA DO CALENDARIO
                header("location:../../../admin/cronograma.php?cod_curso=".$codCurso."&cod_turma=".$codTurma);
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }



?>
