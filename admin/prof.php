<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadProf.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <form action="" method="post" class="">
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>
                <div class="mb-3">
                    <label for="nomeProf" class="form-label">
                        <h2>Cadastro Professor: </h2>
                    </label>
                    <input type="text" name="nomeProf" id="nomeProf" required class="form-control" placeholder="Digite o nome do Professor:">
                </div>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="cprof" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
        <div class="col col-10">
            <h2>Lista dos Professores:</h2>
            <?php
            include_once("inc/listas/listaProf.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>