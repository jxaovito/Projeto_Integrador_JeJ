<?php

include_once(dirname(__FILE__). "/../banco.php");


if (isset($_POST['cdisciplina'])&& $_POST['randcheck']== $_SESSION['rand']) {
    $nomeDisciplina = $_POST['nomeDisciplina'];
    $nomeCor = $_POST['nomeCor'];

   
        $sql = $pdo -> prepare("INSERT INTO disciplina (cod_disciplina,nome,cor) values (null,?,?)");

        if($sql -> execute(array($nomeDisciplina,$nomeCor))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }
?>