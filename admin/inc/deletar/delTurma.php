<?php

include_once(dirname(__FILE__). "/../banco.php");

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


?>
