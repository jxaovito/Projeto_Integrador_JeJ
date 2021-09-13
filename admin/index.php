<?php
$titulo = "Administrador";
include_once('inc/headerindex.php');
include_once('inc/banco.php');
include_once('inc/cadastros/cadCurso.php');
include_once('inc/cadastros/cadTurma.php');

?>

<div class="container">
    <div class="row">

<!-- BOTÃO DE DESLOGAR PARA O ADMIN-->
        <div class="d-flex flex-nowrap bd-highlight">
            <div class="order-3 p-2 bd-highlight">
                <a href="?logout=true" style="text-decoration: none;" class="btn btn-outline-primary float-start m-2">Sair</a>
            </div>
 
            <!-- BOTÕES DE CADASTRO DA TURMA E CURSO -->
            <div class="order-2 p-2 bd-highlight">
                <a class="bt more-bt float-end" href="#modalTurma" data-bs-toggle="modal">
                    <span class="fl"></span><span class="sfl"></span><span class="cross"></span><i></i>
                    <p>Cadastrar Turma</p>
                </a>
            </div>
            <div class="order-1 p-2 bd-highlight">
                <a class="bt more-bt float-end" href="#modalCurso" data-bs-toggle="modal">
                    <span class="fl"></span><span class="sfl"></span><span class="cross"></span><i></i>
                    <p>Cadastrar curso</p>
                </a>
            </div>
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
        <!-- <script>
    function myFunction(valor) {
        var resultadoEspaco = valor.split("|", 2);
        cod_curso = resultadoEspaco[0];
        cod_turma = resultadoEspaco[1];

        window.location = "cronograma.php?cod_curso=" + cod_curso + "&cod_turma=" + cod_turma;
    }
</script> -->


        <?php include_once('inc/footer.php'); ?>