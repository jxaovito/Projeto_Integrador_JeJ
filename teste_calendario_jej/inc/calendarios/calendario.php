<?php
include_once('dataCalendario.php');


?>
<nav class="navtop">
	<div>
		<h1>Cronograma</h1>
	</div>
</nav>

<div class="content home">
	<?= $calendar ?>

	<div class="pa">
		<form class="" action="">
			<select class="btn btn-outline-primary" id="meses" name="meses">
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="3">Março</option>
				<option value="4">Abril</option>
				<option value="5">Maio</option>
				<option value="6">Junho</option>
				<option value="7">Julho</option>
				<option value="8">Agosto</option>
				<option value="9">Setembro</option>
				<option value="10">Outubro</option>
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>
			</select>
			<input class="btn btn-primary" type="submit" value="enviar">
		</form>
	</div>

</div>
<div class="container-fluid">
	<div class="row">
		<div class="col col-8">
			<form action="" method="post">

				<div class="container">
					<h2>Modal Example</h2>

					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">


							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<select name="hCurso" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
									<?php
				include_once(dirname(__FILE__) . "/../banco.php");
				$sql = $pdo->prepare('SELECT calendario.cod_calendario, calendario.horario_ini, calendario.horario_fim , curso.nome as nomecurso, disciplina.nome as nomedisciplina, professor.nome as nomeprofessor, turma.nome as nometurma FROM calendario 
								left join curso on calendario.cod_curso = curso.cod_curso
								left join disciplina on calendario.cod_disciplina = disciplina.cod_disciplina 
								left join professor on calendario.cod_professor = professor.cod_professor 
								left join turma on calendario.cod_turma = turma.cod_turma ');
				if ($sql->execute()) {
					$info = $sql->fetchAll(PDO::FETCH_ASSOC);

					foreach ($info as $key => $values) {
						$values['horario_ini'] .$values['horario_fim'] . "," . $values['cod_curso'] . "," . $values['cod_disciplina'] . "," . $values['cod_professor'] . $values['cod_turma']
				?>
						


						<option value="<?php echo $values['cod_calendario'] ?>"> <?php echo "Código: " . $values['cod_calendario'] . ", Horário: " . $values['horario_ini'] . " - " . $values['horario_fim'] . ", Curso: " . $values['nomecurso'] . ", Disciplina: " . $values['nomedisciplina'] . ", Professor: " . $values['nomeprofessor'] . ", Turma: " . $values["nometurma"] ?></option>
				<?php
					}
				}
				?>

								</div>
								<div class="">
									<input type="date" name="hData" id="hData" class="form-control">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

								</div>

							</div>

						</div>
					</div>

				</div>
				</select>
		</div>

		</form>
	</div>
</div>