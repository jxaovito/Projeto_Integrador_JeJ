<?php
include_once('dataCalendario.php');
?>


<!-- INCLUI O CALENDARIO  -->
<div class="content home">
	<?= $calendar ?>


	<!-- SELECT DA LISTA DOS MESES NO CALENDÁRIO DO USUÁRIO -->
	<div class="dropdown my-2">
		<button class="btn btn-outline-dark dropdown-toggle " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
			Selecione um mês
		</button>
		<ul class="dropdown-menu shadow-lg p-0 " aria-labelledby="dropdownMenu2">
			<li>
				<ul class="list-group">
					<li class="list-group-item bg-white p-3">
						<ul class="d-flex flex-column  text-center p-0 m-0 " style="list-style: none;">
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=1&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Janeiro</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=2&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Fevereiro</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=3&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Março</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=4&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Abril</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=5&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Maio</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=6&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Junho</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=7&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Julho</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=8&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Agosto</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=9&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Setembro</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=10&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Outubro</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=11&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Novembro</a>
							<a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?meses=12&cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">Dezembro</a>
					</li>
				</ul>
			</li>
		</ul>
		</li>
		</ul>
	</div>

</div>

<script>
	document.getElementById("meses").value = <?php echo isset($month) ? $month : "Selecione um Mês" ; ?>;
</script>