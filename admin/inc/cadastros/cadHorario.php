<?php

include_once(dirname(__FILE__). "/../banco.php");


// if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])



if (isset($_POST['chorario']) && $_POST['randcheck']== $_SESSION['rand']) {
    $horario_ini = $_POST['hIni'];
    $horario_fim = $_POST['hFim'];
    $disciplina = $_POST['hDisciplina'];
    $professor = $_POST['hProfessor'];
    $data = $_POST['nomeData'];
    $turma = $_POST['hTurma'];
    $curso = $_POST['hCurso'];



   
        $sql = $pdo -> prepare("INSERT INTO calendario (cod_calendario,horario_ini,horario_fim, cod_curso, cod_disciplina, cod_professor, cod_turma ,dia) values (null,?,?,?,?,?,?,?)");

        if($sql -> execute(array($horario_ini,$horario_fim,$curso,$disciplina,$professor,$turma,$data))){
            echo 'Dados cadastrados com sucesso.';
        } else {
            echo 'Dados não cadastrados';
        }     
            }

