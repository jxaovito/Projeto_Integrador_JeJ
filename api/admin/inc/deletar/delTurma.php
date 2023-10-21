<?php

include_once(dirname(__FILE__). "../../../../banco/banco.php");

// PUXAR CODIGO DA TURMA
    if(isset($_GET ['id'])){
        $cod_turma = $_GET['id'];

        // DELETA TURMA NO CARD
        $sql = $pdo->prepare("DELETE FROM turma WHERE cod_turma =?");
        if($sql->execute(array($cod_turma))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                header('location:../../index.php');
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }

    if(isset($_GET ['id'])){
        $cod_turma = $_GET['id'];
    $sql = $pdo->prepare("SELECT * FROM calendario WHERE cod_turma = ?");
    if($sql->execute(array($cod_turma))){
        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("DELETE FROM calendario WHERE cod_turma =?");
            if($sql->execute(array($cod_turma))){
                if($sql->rowCount() > 0){
                    echo 'Aluno excluído com sucesso!!';
                    header('location:../../index.php');
                } else{
                    echo 'Código não localizado<br>';
                }
    
            } else {
                echo 'Erro ao excluir alunos!!';
            }
           
        } else{
            header('location:../../index.php');
        }

    }else {
        echo 'Erro ao excluir alunos!!';
        }
    }

 


?>
