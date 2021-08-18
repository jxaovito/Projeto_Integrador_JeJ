<?php
include_once('dataCalendario.php');


?>
	<!-- <nav class="navtop">
		<div>
			<h1>Cronograma</h1>
		</div>
	</nav> -->

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
				<input class="btn btn-primary" type="submit" value="enviar" >
			</form>
		</div>
	
	</div>
<form action="" method="post">
<select name="hCurso" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php
                        include_once(dirname(__FILE__) . "/../banco.php");
						$sql = $pdo-> prepare('SELECT calendario.cod_calendario, calendario.horario_ini, calendario.horario_fim , curso.nome as nomecurso, disciplina.nome as nomedisciplina, professor.nome as nomeprofessor, turma.nome as nometurma FROM calendario 
						left join curso on calendario.cod_curso = curso.cod_curso
						left join disciplina on calendario.cod_disciplina = disciplina.cod_disciplina 
						left join professor on calendario.cod_professor = professor.cod_professor 
						left join turma on calendario.cod_turma = turma.cod_turma ');
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>



                                <option value="<?php echo $values['cod_calendario'].$dataFormatadaIni = date('H:i' , strtotime($values['horario_ini'])).$dataFormatadaFim = date('H:i' , strtotime($values['horario_fim'])).",".$values['cod_curso'].",".$values['cod_disciplina'].",".$values['cod_professor'].$values['cod_turma'] ?>"> <?php echo "Código: ".$values['cod_calendario'].", Horário: ".$dataFormatadaIni." - ".$dataFormatadaFim.", Curso: ".$values['nomecurso'].", Disciplina: ".$values['nomedisciplina'].", Professor: ".$values['nomeprofessor'].", Turma: ".$values["nometurma"] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
				</form>