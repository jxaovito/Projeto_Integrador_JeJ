<?php
include_once('dataCalendario.php');
?>



<div class="content home">
	<?= $calendar ?>

	<div class="pa">
		<form class="" action="">
			<select class="btn btn-outline-primary" id="meses" name="meses" >
				<option value="" selected disabled hidden>Selecione um mês</option>
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

<script>
	document.getElementById("meses").value = <?php echo isset($month) ? $month : "Selecione um Mês" ; ?>;
</script>