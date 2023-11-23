<?php
$sql = $pdo->prepare('SELECT * FROM curso');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
        $cursoNome = ucfirst($values['nome']);
        $cursoCod = $values['cod_curso'];

?>
<!-- CARDS DOS CURSOS -->
        <div class=" col col-lg-3" >
            <div class="card m-2" style="width: 18rem">

                
                <img src="api/src/img/cursao.jpg" class="card-img-top float-start">

                <div class="card-body shadow">

                    <h5 class="card-title"> <?php echo $cursoNome ?></h5>

                    <!-- SELECT COM AS LISTAS DAS TURMAS DENTRO DOS CARDS -->
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
                                                        <a class="dropdown-item" style="text-decoration: none; color:black" href="cronograma.php?cod_curso=<?php echo $cursoCod ?>&cod_turma=<?php echo $values['cod_turma'] ?>"><?php echo $turmaNome ?></a>
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