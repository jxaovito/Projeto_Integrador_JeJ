<?php
$titulo = "Administrador";
include_once('inc/headerindex.php');
include_once('inc/banco.php');
include_once('inc/cadastros/cadCurso.php');
include_once('inc/cadastros/cadTurma.php');
 
?>
 
<div class="container">
    <div class="row">
            <!-- BOTÕES DE CADASTRAR TURMA E CURSO -->
                <div class="d-flex bd-highlight ">
                    <div class="p-2 bd-highlight"> <a class="shadow bt more-bt float-end" href="#modalTurma" data-bs-toggle="modal">
                            <span class="fl"></span><span class="sfl"></span><span class="cross"></span><i></i>
                            <p class="font">Cadastro Turma</p>
                        </a></div>
                    <div class="p-2 bd-highlight"> <a class="shadow bt more-bt float-end" href="#modalCurso" data-bs-toggle="modal">
                            <span class="fl"></span><span class="sfl"></span><span class="cross"></span><i></i>
                            <p class="font">Cadastrar curso</p>
                        </a></div>

                        <!-- BOTÃO DE DESLOGAR PARA O ADMIN -->
                    <div class="ms-auto p-2 bd-highlight  ">
                        <a href="?logout=true" style="text-decoration: none;" class="float-start cor border">
                        <button class="1 btn-sair fourth float-end ">Sair</button>
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
 
        <?php include_once('inc/footer.php'); ?>