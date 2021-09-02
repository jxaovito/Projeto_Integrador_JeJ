<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<?php
include_once(dirname(__FILE__) . "/../banco.php");;
include 'codCalendario.php';
$week = 3;
$year = 2021;


$timestamp = mktime(0, 0, 0, 1, 1,  $year) + ($week * 7 * 24 * 60 * 60);
$timestamp_for_monday = $timestamp - 86400 * (date('N', $timestamp) - 1);

$date_for_monday = date('Y-m-d', $timestamp_for_monday);


if (isset($_GET['meses'])) {
	$month = $_GET['meses'];
	$mydate = (date("Y") . '-' . $month); //.'-'.date("d"));
} else {

	$mydate = (date("Y-m-d"));
}

if (isset($_GET['cod_turma'])){
	$codTurma = $_GET['cod_turma'];
 } else {
	$codTurma = "";
 }
 
 if (isset($_GET['cod_curso'])){
	 $codCurso = $_GET['cod_curso'];
  } else {
	 $codCurso = "";
  }

  echo $codCurso;
  echo $codTurma;


$calendar = new Calendar(date($mydate));

$sql = $pdo->prepare('SELECT calendario.cod_calendario, calendario.horario_ini, calendario.horario_fim , curso.nome as nomecurso, disciplina.nome as nomedisciplina, disciplina.cor as disciplinaCor, professor.nome as nomeprofessor, turma.nome as nometurma, calendario.dia FROM calendario
                                                                            left join curso on calendario.cod_curso = curso.cod_curso
                                                                            left join disciplina on calendario.cod_disciplina = disciplina.cod_disciplina 
                                                                            left join professor on calendario.cod_professor = professor.cod_professor 
                                                                            left join turma on calendario.cod_turma = turma.cod_turma 
																			where calendario.cod_turma ='.$codTurma.' AND calendario.cod_curso='.$codCurso
																			);
if ($sql->execute()) {
	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	foreach ($info as $key => $values) {

		$codcalendario = $values['cod_calendario'];
		$dataFormatadaIni = date('H:i', strtotime($values['horario_ini']));
		$dataFormatadaFim = date('H:i', strtotime($values['horario_fim']));
		$curso = $values['nomecurso'];
		$disciplina = $values['nomedisciplina'];
		$professor = $values['nomeprofessor'];
		$turma = $values['nometurma'];
		$data = $values['dia'];
		$cor = $values['disciplinaCor'];
        $deletar = "<a href='../admin/inc/deletar/delHorario.php?id=".$values['cod_calendario']."&cod_curso=".$codCurso."&cod_turma=".$codTurma." 'style='color:white' > x </a>";
 
        $espaco = '&emsp;&emsp;&emsp;&emsp;&ensp;';
	

			$calendar->add_event("$dataFormatadaIni-$dataFormatadaFim $espaco $deletar <br>$disciplina<br>$professor<br>", "$data", 1, "$cor");



	}
}
?>

