<?php
        $sql = $pdo->prepare('SELECT * FROM curso');
        if ($sql->execute()) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($info as $key => $values) {
                $cursoNome = $values['nome'];
                $cursoCod = $values['cod_curso'];

        ?>


                <div class="card" style="width: 18rem">
                    <div>

                        <?php echo "<a  class='btn btn-crimsom'href='../admin/inc/deletar/delCurso.php?id=" . $values['cod_curso'] . "'>Excluir</a>"; ?>

                        <img src="img/cursinho.jpg" class="card-img-top float-start">
                    </div>
                    <div class="card-body">

                        <h5 class="card-title"> <?php echo $cursoNome ?></h5>

                        <p class="card-text">Curso do senac</p>


                        <div class="mb-3">
                            <label for="hTurma" class="form-label">
                            </label>
                            <select name="hTurma" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onchange="<?php header('location:cronograma.php') ?>">
                                <?php
                                $sql = $pdo->prepare('SELECT nome, cod_turma FROM turma where cod_curso = ' . $cursoCod);
                                if ($sql->execute()) {
                                    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($info as $key => $values) {
                                        $turmaNome = $cursoCod . "-" . $values['cod_turma'] . "-" . $values['nome'];

                                ?>

                                        <option><a class="" href="cronograma.php"><?php echo $turmaNome ?></a></option>

                                <?php
                                    }
                                }
                                ?>
                            </select>
                        
                        
                        
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTurma">
                                   Cadastro Turma
                                </button>
                    </div>
                </div>
        <?php }
        } ?>