<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadCurso.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <form action="" method="post" class="">
                <?php
                //$rand = rand();
                $_SESSION['rand'] = $rand;
                ?>

                <div class="mb-3">
                    <label for="nomeCurso" class="form-label">
                        <h2>Cadastro Curso</h2>
                    </label>
                    <input type="text" name="nomeCurso" id="nomeCurso" required class="form-control" placeholder="Digite o nome do Curso:">
                </div>
                
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="ccurso" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
        <div class="col col-10">
            <h2>Lista dos Cursos:</h2>
            <?php
            include_once("inc/listas/listaCurso.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>