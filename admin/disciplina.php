<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadDisciplina.php");
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
                    <label for="nomeDisciplina" class="form-label">
                        <h2>Cadastro Disciplina:</h2>
                    </label>
                    <input type="text" name="nomeDisciplina" id="nomeDisciplina" required class="form-control" placeholder="Digite o nome da Disciplina:">
                </div>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="cdisciplina" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
        <div class="col col-10">
            <h2>Lista das disciplinas:</h2>
            <?php
            include_once("inc/listas/listaDisciplina.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>