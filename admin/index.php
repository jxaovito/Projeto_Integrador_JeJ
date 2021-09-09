<?php
$titulo = "Administrador";
include_once('inc/headerindex.php');
include_once('inc/banco.php');
include_once('inc/cadastros/cadCurso.php');
include_once('inc/cadastros/cadTurma.php');

?>

<div class="container">
    <div class="row">

        <div>
            <a href="?logout=true" style="text-decoration: none;" class="btn btn-primary float-start m-2">Sair</a>
            <div>
                <a class="bt more-bt float-end" href="#modalCurso" data-bs-toggle="modal">
                    <span class="fl"></span><span class="sfl"></span><span class="cross"></span><i></i>
                    <p>Cadastrar curso</p>
                </a>
            </div>
            <button type="button" class="btn btn-warning m-2 float-end" data-bs-toggle="modal" data-bs-target="#modalCurso">
                <h6>Cadastro</h6>
            </button>
            <button type="button" class="btn btn-primary m-2 float-end" data-bs-toggle="modal" data-bs-target="#modalTurma">
                Cadastro Turma
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