<?php
if (isset($_GET['cod_turma'])) {
    $codTurma = $_GET['cod_turma'];
} else {
    $codTurma = "";
}

if (isset($_GET['cod_curso'])) {
    $codCurso = $_GET['cod_curso'];
} else {
    $codCurso = "";
}
?>

<!-- ABA DO TOPO NO CALENDARIO DO ADMINISTRADOR -->
<div style="padding: 3px;" class="d-flex align-items-center mb-3 shadow fundo_menu">
    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <img class="img-fluid " src="../../src/img/menularanja.png" alt="">
    </a>
    <h5 class="px-4" style="color: #eeeeee; margin:0px;">Cronograma</h5>
</div>

<!-- ABA DE MENU À ESQUERDA DO CALENDARIO -->
<div class="offcanvas offcanvas-start cinza" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header fundo_menu shadow">
        <h5 class="offcanvas-title branco" id="offcanvasExampleLabel">Menu do Sistema</h5>
        <button type="button" class="btn btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">
        <div class="pb-3 px-3 branco">

        </div>

        <!-- ABRIR LISTA DENTRO DO MENU COM OS CADASTROS -->
        <div class="accordion accordion-flush shadow" id="accordionFlushExample" ">
            <div class=" accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="btn accordion-button accordion-button-active-color collapsed fundocinza" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h6 class="preto">Cadastros</h6>
                </button>
            </h2>

            <!-- LISTA COM AS PÁGINAS DE CADASTROS -->
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                    <ul class="list-group">
                        <li class="btn list-group-item fundocinza">
                            <a style="text-decoration: none;" class="preto" href="disciplina.php?cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">
                                <div class="fundoacordeao"> Cadastre uma Disciplina</div>
                            </a>
                        </li>
                        <li class="btn list-group-item fundocinza">
                            <a style="text-decoration: none;" class="preto" href="prof.php?cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">
                                <div class="fundoacordeao">Cadastre um Professor</div>
                            </a>
                        </li>
                        <li class="btn list-group-item fundocinza">
                            <a style="text-decoration: none;" class="preto" href="cronograma.php?cod_curso=<?php echo $codCurso ?>&cod_turma=<?php echo $codTurma ?>">
                                <div class="fundoacordeao">Cronograma</div>
                            </a>
                        </li>
                    </ul>



                </div>
            </div>
        </div>



    </div>
</div>
<!-- BOTÕES DE VOLTAR AO INICIO E SAIR -->
<li class="list-group-item fundo_menu">
    <a href="index.php" style="text-decoration: none;" class="branco fundocordeao">
       <div>Início</div>
    </a>
</li>
<li class="list-group-item fundo_menu  ">
    <a href="?logout=true" style="text-decoration: none;" class="branco ">
   <div> Sair </div>
</a>
</li>
</form>
</div>