<?php

include_once(dirname(__FILE__). "/../banco.php");

    if(isset($_GET ['id'])){
        $cod_professor = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM professor WHERE cod_professor =?");
        if($sql->execute(array($cod_professor))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                header('location:../../prof.php');
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }


?>
