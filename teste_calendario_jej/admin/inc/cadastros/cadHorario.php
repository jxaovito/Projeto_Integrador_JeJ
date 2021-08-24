<?php

include_once(dirname(__FILE__). "/../banco.php");


// if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])


if (isset($_POST['chorario']) && $_POST['randcheck']== $_SESSION['rand']) {
    $horario_ini = $_POST['hIni'];
    $horario_fim = $_POST['hFim'];
    $disciplina = $_POST['hDisciplina'];
    $professor = $_POST['hProfessor'];
    $data = $_POST['nomeData'];



   
        $sql = $pdo -> prepare("INSERT INTO calendario (cod_calendario,horario_ini,horario_fim, cod_disciplina, cod_professor,dia) values (null,?,?,?,?,?)");

        if($sql -> execute(array($horario_ini,$horario_fim,$disciplina,$professor,$data))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }

