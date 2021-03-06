<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadDisciplina.php");
?>

<div class="container-fluid ">
    <div class="row">
        <div class="col col-3">
            <form action="" method="post" class="">
                <?php
                // $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>

    <!-- CADASTRAR DISCIPLINA PARA INSERIR NO CALENDARIO POSTERIORMENTE -->
                <div class="mb-3">
                    <label for="nomeDisciplina" class="form-label">
                        <h2 class="fonte">Cadastro Disciplina:</h2>
                    </label>
                    <input type="text" name="nomeDisciplina" id="nomeDisciplina" required class="form-control" placeholder="Digite o nome da Disciplina:">
                    <div class="mb-3">

                        <label for="nomeCor" class="form-label mt-3">
                            <h5 class="fonte">Selecione uma cor para a disciplina </h5>
                        </label>
                        <!-- SELECT COM AS CORES PARA CADASTRAR COM A DISCIPLINA -->
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
                <!-- BOTÕES DE CADASTRAR DISCIPLINA E VOLTAR PARA A PÁGINA ANTERIOR -->
                <input type="submit" name="cdisciplina" value="Cadastrar" class="btn btn-warning">
                <?php echo "<a class='btn btn-primary' href='cronograma.php?cod_curso=$codCurso&cod_turma=$codTurma'> Voltar </a>";?>

            </form>
        </div>
        <!-- EXIBE A LISTA DAS DISCIPLINAS -->
        <div class="col col-9">
            <h2 class="fonte">Lista das disciplinas:</h2>
            <?php
            include_once("inc/listas/listaDisciplina.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>