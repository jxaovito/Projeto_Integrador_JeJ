<?php
$titulo = "Administrador";
include_once('inc/headerindex.php');
include_once('inc/banco.php');
include_once('inc/cadastros/cadCurso.php');
include_once('inc/cadastros/cadTurma.php');

?>

<div class="container">
    <div class="row">
        <div><button type="button" class="btn btn-warning m-2 float-end" data-bs-toggle="modal" data-bs-target="#modalCurso">
                <h6>Cadastro</h6>
            </button>
        </div>


        <?php
        include_once('inc/principal/cards/cardCurso.php');
        ?>



        <?php
        include_once('inc/principal/modal/modalCurso.php');

        include_once('inc/principal/modal/modalTurma.php');
        ?>

    </div>
</div>
<script>
    function myFunction(valor) {
        var resultadoEspaco = valor.split("|", 2);
        cod_curso = resultadoEspaco[0];
        cod_turma = resultadoEspaco[1];

        window.location = "cronograma.php?cod_curso=" + cod_curso + "&cod_turma=" + cod_turma;
    }
</script>


<?php include_once('inc/footer.php'); ?>