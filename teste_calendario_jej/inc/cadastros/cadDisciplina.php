<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['cdisciplina'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeDisciplina = $_POST['nomeDisciplina'];

   
        $sql = $pdo -> prepare("INSERT INTO disciplina (cod_disciplina,nome) values (null,?)");

        if($sql -> execute(array($nomeDisciplina))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }
?>