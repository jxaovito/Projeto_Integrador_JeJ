<?php

include_once(dirname(__FILE__). "/../banco.php");

    if(isset($_GET ['id'])){
        $cod_calendario = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM calendario WHERE cod_calendario =?");
        if($sql->execute(array($cod_calendario))){
            if($sql->rowCount() > 0){
                echo 'Aluno excluído com sucesso!!';
                header('location:../../.php');
            } else{
                echo 'Código não localizado<br>';
            }

        } else {
            echo 'Erro ao excluir alunos!!';
        }
    }


?>
