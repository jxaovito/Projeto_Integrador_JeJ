<?php

include_once(dirname(__FILE__). "/../banco.php");

    if(isset($_GET ['id'])){
        $cod_curso = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM curso WHERE cod_curso =?");
        if($sql->execute(array($cod_curso))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    
    }
    
    if(isset($_GET ['id'])){
        $cod_curso = $_GET['id'];
    $sql = $pdo->prepare("SELECT * FROM turma WHERE cod_curso =?");
    if($sql->execute(array($cod_curso))){
        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("DELETE FROM turma WHERE cod_curso =?");
            if($sql->execute(array($cod_curso))){
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
