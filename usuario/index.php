<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once('inc/banco.php');


?>

<div class="container mt-3">
    <div class="row">
        <h1 class="fonte"> Selecione a sua turma </h1>

        <?php
        include_once('inc/cardCurso.php');
        ?>

    </div>
</div>


<?php include_once('inc/footer.php'); ?>