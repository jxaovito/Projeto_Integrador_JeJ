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

                        <div class="dropdown my-2">
                            <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                Selecione uma turma
                            </button>
                            <ul class="dropdown-menu w-100 shadow-lg p-0 " aria-labelledby="dropdownMenu2">
                                <li>
                                    <ul class="list-group">
                                        <?php
                                        $sql = $pdo->prepare('SELECT nome, cod_turma FROM turma where cod_curso = ' . $cursoCod);
                                        if ($sql->execute()) {
                                            $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($info as $key => $values) {
                                                $turmaNome = $values['nome'];

                                        ?>

                                                <li class="list-group-item bg-white p-3">
                                                    <ul class="d-flex p-0 m-0 " style="list-style: none;">
                                                        <li class="flex-fill">
                                                            <a class="" style="text-decoration: none; color:black" href="cronograma.php?cod_curso=<?php echo $cursoCod ?>&cod_turma=<?php echo $values['cod_turma'] ?>"><?php echo $turmaNome ?></a>
                                                        </li>
                                                        <li >
                                                            <a style="color: red;"  href="inc/deletar/delTurma.php?id=<?php echo $values['cod_turma']; ?>" title="Excluir"><i class="far fa-trash-alt"></i>
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


                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTurma">
                        Cadastro Turma
                    </button>
                </div>
            </div>
        </div>
<?php }
} ?>