<?php
$titulo = "Administrador";
include_once('inc/header.php');
include_once("inc/cadastros/cadHorario.php");

if (isset($_GET['cod_turma'])){
   $codTurma = $_GET['cod_turma'];
} else {
   $codTurma = "";
}

if (isset($_GET['cod_curso'])){
    $codCurso = $_GET['cod_curso'];
 } else {
    $codCurso = "";
 }


?>


<div class="container-fluid">
    <div class="row">
        <div class="col col-11">
            <form action="" method="post" class="mt-5">


                <?php
                // $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>



                <div class="mb-3">
                    <label for="hIni" class="form-label mt-5">
                        <h3 class="fonte">Horario de Inicio</h3>
                    </label>
                    <input type="time" name="hIni" id="hIni" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hFim" class="form-label ">
                        <h3 class="fonte">Horario de Fim</h3>
                    </label>
                    <input type="time" name="hFim" id="hFim" class="form-control ">
                </div>
                <div class="mb-3">
                    <select name="hCurso" class="form-select form-select mb-3 " hidden aria-label=".form-select-lg example">
                        <?php
            
                        $sql = $pdo->prepare('SELECT * FROM curso where cod_curso ='.$codCurso);
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>



                                <option value="<?php echo $codCurso ?>"> <?php echo $values['nome'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="hDisicplina" class="form-label">
                        <h3 class="fonte">Selecione uma Disciplina</h3>
                    </label>
                    <select name="hDisciplina" class="form-select form-select mb-3" aria-label=".form-select-lg example">

                        <?php

                        $sql = $pdo->prepare('SELECT * from disciplina where cod_curso = '.$codCurso );
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>
                                <option value="<?php echo $values['cod_disciplina'] ?>"> <?php echo ucfirst($values['nome']) ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hProfessor" class="form-label">
                        <h3 class="fonte">Selecione um Professor</h3>
                    </label>
                    <select name="hProfessor" class="form-select form-select mb-3" aria-label=".form-select-lg example">
                        <?php
    
                        $sql = $pdo-> prepare('SELECT * FROM professor where cod_curso='.$codCurso.' AND cod_turma='.$codTurma);
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {

                        ?>
                                <option value="<?php echo $values['cod_professor'] ?>"> <?php echo ucwords($values['nome']) ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="hTurma" class="form-select form-select mb-3 " hidden aria-label=".form-select-lg example">
                        <?php
                      
                        $sql = $pdo->prepare('SELECT * FROM turma WHERE cod_turma = '.$codTurma.' AND cod_curso = '.$codCurso);
                        if ($sql->execute()) {
                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($info as $key => $values) {
                            echo"<a class='btn' href='../inc/deletar/delTurma.php?id=".$values['cod_turma']."'> | Excluir | </a>"
                        ?>
                            <option value="<?php echo $codTurma ?>"> <?php echo $values['nome'];  ?></option> 
                                
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">

                  
                    <div class="mb-3">
                        <label for="nomeData" class="form-label">
                            <h3 class="fonte">Selecione um horário</h3>
                        </label>
                        <input type="date" name="nomeData" id="nomeData" class="form-control" placeholder="Digite o nome do Curso:">
                    </div>
                </div>

                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" name="chorario" value="Cadastrar" class="btn btn-primary">
                <a class="btn btn-primary" href="index.php"> Voltar </a>

            </form>
        </div>
    </div>
</div>



<?php include_once('inc/footer.php'); ?>