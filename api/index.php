<?php
$titulo = "Página inicial";
phpinfo();

include_once('usuario/inc/headerindex.php');
include_once(dirname(__FILE__) . "../banco/banco.php");

?>
 
<div class="container mt-3">
    <div class="row d-flex">
   
    <h1 class="mt-3">Selecione sua Turma: </h1>
    <div class="d-flex">
    <div class="ms-auto bd-highlight">
                        <a href="../admin/index.php" style="text-decoration: none;" class="float-start cor border">
                        <button class="1 btn-sair fourth float-end">Entrar como administrador</button>
                        </a>
                    </div>
                    </div>
        <?php
        include_once('usuario/inc/cardCurso.php');
        ?>

    </div>
</div>


<?php include_once('usuario/inc/footer.php');
?>