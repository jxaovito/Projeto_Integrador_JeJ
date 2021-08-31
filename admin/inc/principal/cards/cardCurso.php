<?php
        $sql = $pdo->prepare('SELECT * FROM curso');
        if ($sql->execute()) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($info as $key => $values) {
                $cursoNome = $values['nome'];
                $cursoCod = $values['cod_curso'];

        ?>

                <div class="col col-3">
                <div class="card m-2" style="width: 18rem">
                    
                        <?php echo "<a  class='btn btn-outline-danger 'href='../admin/inc/deletar/delCurso.php?id=" . $values['cod_curso'] . "'>Excluir</a>"; ?>

                        <img src="img/cursinho.jpg" class="card-img-top float-start">
                    
                    <div class="card-body">

                        <h5 class="card-title"> <?php echo $cursoNome ?></h5>

                        <h6 class="card-text">Selecione um Turma</h6>


                        <div class="mb-3">
                            <label for="hTurma" class="form-label">
                            </label>
                            <select name="hTurma" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  onchange="myFunction(this.value)">
                                <?php
                                $sql = $pdo->prepare('SELECT nome, cod_turma FROM turma where cod_curso = ' . $cursoCod);
                                if ($sql->execute()) {
                                    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($info as $key => $values) {
                                        $turmaNome = $values['nome'];

                                ?>
                                        <option value="" selected disabled hidden> <p> Selecione sua Turma</p></option>
                                        <option value="<?php echo $cursoCod . '|' . $values['cod_turma'] ?>"><a class="" href="cronograma.php"><?php echo $turmaNome ?></a></option>

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
            </div>
        <?php }
        } ?>