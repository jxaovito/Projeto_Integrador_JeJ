<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadHorario.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-11">
            <form action="" method="post" class="">


                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>



                <div class="mb-3">
                    <label for="hIni" class="form-label">
                        <h3>Horario de Inicio</h3>
                    </label>
                    <input type="time" name="hIni" id="hIni" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hFim" class="form-label">
                        <h3>Horario de Fim</h3>
                    </label>
                    <input type="time" name="hFim" id="hFim" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hCurso" class="form-label">
                        <h3>Selecione um Curso</h3>
                    </label>

                    <select name="hCurso" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php
                        include_once(dirname(__FILE__) . "/../banco.php");
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

                </div>
                <div class="mb-3">
                    <label for="hDisicplina" class="form-label">
                        <h3>Selecione uma Disciplina</h3>
                    </label>
                    <select name="hDisciplina" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                        <?php
                        include_once(dirname(__FILE__) . "/../banco.php");
                        $sql = $pdo->prepare('SELECT * FROM disciplina');
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>
                                <option value="<?php echo $values['cod_disciplina'] ?>"> <?php echo $values['nome'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hProfessor" class="form-label">
                        <h3>Selecione um Professor</h3>
                    </label>
                    <select name="hProfessor" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php
                        include_once(dirname(__FILE__) . "/../banco.php");
                        $sql = $pdo->prepare('SELECT * FROM professor');
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>
                                <option value="<?php echo $values['cod_professor'] ?>"> <?php echo $values['nome'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hTurma" class="form-label">
                        <h3> Selecione uma Turma</h3>
                    </label>
                    <select name="hTurma" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php
                        include_once(dirname(__FILE__) . "/../banco.php");
                        $sql = $pdo->prepare('SELECT * FROM turma');
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>
                                <option value="<?php echo $values['cod_turma'] ?>"> <?php echo $values['nome'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">


                    <div class="mb-3">
                        <label for="nomeData" class="form-label">
                            <h3>Selecione um horário</h3>
                        </label>
                        <input type="date" name="nomeData" id="nomeData" class="form-control" placeholder="Digite o nome do Curso:">
                    </div>
                </div>
                <div class="mb-3">

                        <label for="nomeCor" class="form-labe">
                            <h3>Selecione uma cor</h3>
                        </label>
                        <select name="nomeCor" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="yellow">Amarelo</option>
                            <option value="red"> Vermelho </option>
                            <option value="blue"> Azul </option>
                            <option value="green"> Verde </option>
                        </select>
                </div>

                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="chorario" value="Cadastrar" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>



<?php include_once('inc/footer.php'); ?>