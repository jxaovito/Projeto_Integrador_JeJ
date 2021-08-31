<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadTurma.php");
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
                    <label for="nomeTurma" class="form-label">
                        <h2>Cadastro Turma:</h2>
                    </label>
                    <label for="hCurso" class="form-label">
                        <h3>Selecione um Curso</h3>
                    </label>

                    <select name="hCurso" class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <?php
                    $sql = $pdo->prepare('SELECT * FROM curso');
                    if ($sql->execute()) {
                        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($info as $key => $values) {

                    ?>



                                <option value="<?php echo $values['cod_curso'] ?>"> <?php echo $values['nome'] ?></option>
                        <?php
                        }
                    }
                        ?>
                    </select>
                    <input type="text" name="nomeTurma" id="nomeTurma" required class="form-control" placeholder="Digite o nome da Turma:">
                </div>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="cturma" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
        <div class="col col-10">
            <h2>Lista das turmas:</h2>
            <?php
            include_once("inc/listas/listaTurma.php");
            ?>
        </div>
    </div>
</div>


<?php include_once('inc/footer.php'); ?>