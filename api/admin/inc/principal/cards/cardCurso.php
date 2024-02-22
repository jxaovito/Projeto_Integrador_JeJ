

<?php
$sql = $pdo->prepare('SELECT * FROM curso');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
        $cursoNome = ucfirst($values['nome']);
        $cursoCod = $values['cod_curso'];

?>

        <div class="col col-lg-3">
            <div class="card m-2" style="width: 18rem">

                <a onclick="return confirm('Deseja mesmo excluir o curso?');" class='btn btn-outline-danger' href='inc/deletar/delCurso.php?id=<?php echo $cursoCod?>' >Excluir</a>

                <img src="../src/img/cursao.jpg" class="card-img-top float-start">

                <div class="card-body shadow">

                    <h5 class="card-title"> <?php echo $cursoNome ?></h5>

                    <!-- SELECT COM AS LISTAS DAS TURMAS DENTRO DOS CARDS -->
                        <div class="dropdown my-2">
                            <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                Selecione uma turma
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark w-100 shadow-lg p-0 " aria-labelledby="dropdownMenu2">
                                <li>
                                    <ul class="list-group">
                                        <?php
                                        $sql = $pdo->prepare('SELECT nome, cod_turma FROM turma where cod_curso = ' . $cursoCod);
                                        if ($sql->execute()) {
                                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($info as $key => $values) {
                                                $turmaNome = ucwords($values['nome']);

                                        ?>
                                                <li class="list-group-item bg-white p-3">
                                                    <ul class="d-flex p-0 m-0 " style="list-style: none;">
                                                        <li class="flex-fill">
                                                            <a class="dropdown-item" style="color:black" href="cronograma.php?cod_curso=<?php echo $cursoCod ?>&cod_turma=<?php echo $values['cod_turma'] ?>"><?php echo $turmaNome ?></a>
                                                        </li>

                                                        <!-- BOTÃO DE EXCLUIR DENTRO DA LISTA  -->
                                                        <li >
                                                            <a style="color: red;" class="dropdown-item" href="inc/deletar/delTurma.php?id=<?php echo $values['cod_turma']; ?>" title="Excluir"><i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                </div>
            </div>
        </div>
<?php }
} ?>

