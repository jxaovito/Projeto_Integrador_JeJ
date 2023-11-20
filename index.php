<?php
$titulo = "Página inicial";

include_once('api/usuario/inc/headerindex.php');
include_once(dirname(__FILE__) . "api/banco/banco.php");

?>
 
<div class="container mt-3">
    <div class="row">
   
    <h1 class="mt-3">Selecione sua Turma: </h1>
  
        <?php
        include_once('api/usuario/inc/cardCurso.php');
        ?>

    </div>
    <div class="d-flex">
    <div class="ms-auto bd-highlight">
                        <a href="api/admin/login.php" style="text-decoration: none;" class="float-start cor border">
                        <button class="1 btn-sair fourth float-end">Entrar como administrador</button>
                        </a>
                    </div>
                    </div>
</div>


<?php include_once('api/usuario/inc/footer.php');
?>
