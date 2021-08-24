<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadDisciplina.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-3">
            <form action="" method="post" class="">
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>
                <div class="mb-3">
                    <label for="nomeDisciplina" class="form-label">
                        <h2>Cadastro Disciplina:</h2>
                    </label>
                    <input type="text" name="nomeDisciplina" id="nomeDisciplina" required class="form-control" placeholder="Digite o nome da Disciplina:">
                    <div class="mb-3">

                        <label for="nomeCor" class="form-label mt-3">
                            <h5>Selecione uma cor para a disciplina </h5>
                        </label>
                        <select name="nomeCor" class="form-select form-select mb-3" aria-label=".form-select-lg example">
                            <option value="yellow">Amarelo</option>
                            <option value="red"> Vermelho </option>
                            <option value="blue"> Azul </option>
                            <option value="green"> Verde </option>
                            <option value="purple"> Roxo </option>
                            <option value="brown"> Marrom </option>
                            <option value="pink"> Rosa </option>
                        </select>
                    </div>

                </div>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="cdisciplina" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
        <div class="col col-9">
            <h2>Lista das disciplinas:</h2>
            <?php
            include_once("inc/listas/listaDisciplina.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>