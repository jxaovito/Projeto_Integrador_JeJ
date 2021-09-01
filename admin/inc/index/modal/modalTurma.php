<div class="modal fade" id="modalTurma" tabindex="-1" aria-labelledby="modalTurmalabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTurmalabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="">
                        <?php
                        $rand = rand();
                        $_SESSION['rand'] = $rand;
                        ?>
                        <div class="mb-3">
                            <label for="nomeTurma" class="form-label">
                                <h2></h2>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>