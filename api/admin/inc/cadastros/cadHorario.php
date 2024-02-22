<?php

include_once(dirname(__FILE__) . "../../../../banco/banco.php");

if (isset($_POST['chorario']) && $_POST['randcheck'] == $_SESSION['rand']) {
    $horario_ini = $_POST['hIni'];
    $horario_fim = $_POST['hFim'];
    $disciplina = $_POST['hDisciplina'];
    $professor = $_POST['hProfessor'];
    $data = $_POST['nomeData'];
    $turma = $_POST['hTurma'];
    $curso = $_POST['hCurso'];


    $sql = $pdo->prepare("INSERT INTO calendario (cod_calendario,horario_ini,horario_fim, cod_curso, cod_disciplina, cod_professor, cod_turma ,dia) values (null,?,?,?,?,?,?,?)");

    if ($sql->execute(array($horario_ini, $horario_fim, $curso, $disciplina, $professor, $turma, $data))) {
    } else {
    }
}

if (isset($_POST['cferiado']) && $_POST['randcheck'] == $_SESSION['rand']) {
    $dataFeriado = $_POST['nomeFeriado'];


    $sql = $pdo->prepare("INSERT INTO feriado (cod_feriado,data_feriado) values (null,?)");

    if ($sql->execute(array($dataFeriado))) {
    } else {
    }
}
