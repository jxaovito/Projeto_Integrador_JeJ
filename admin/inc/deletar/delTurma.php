<?php

include_once(dirname(__FILE__). "/../banco.php");

    if(isset($_GET ['id'])){
        $cod_turma = $_GET['id'];

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


?>