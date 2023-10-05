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
                //$rand = rand();
                $_SESSION['rand'] = $rand;
                ?>

                <!-- CADASTRAR PROFESSOR PARA INSERIR NO CALENDARIO POSTERIORMENTE -->
                <div class="mb-3">
                    <label for="nomeProf" class="form-label">
                        <h2  class="fonte">Cadastro Professor: </h2>
                    </label>
                    <input type="text" name="nomeProf" id="nomeProf" required class="form-control font-prof" placeholder="Digite o nome do Professor:">
                </div>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />

                <!-- BOTÕES DE CADASTRAR PROFESSOR E VOLTAR À PAGINA ANTERIOR -->
                <input type="submit" name="cprof" value="Cadastrar" class="btn btn-warning">
                <?php echo "<a class='btn btn-primary' href='cronograma.php?cod_curso=$codCurso&cod_turma=$codTurma'> Voltar </a>";?>

            </form>
        </div>

        <!-- EXIBE A LISTA DOS PROFESSORES -->
        <div class="col col-10">
            <h2 class="fonte">Lista dos Professores:</h2>
            <?php
            include_once("inc/listas/listaProf.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>