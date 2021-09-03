<?php
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
<div style="padding: 3px;" class="d-flex align-items-center mb-3 shadow fundo_menu">
    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <img  class="img-fluid " src="img/menularanja.png" alt="">
    </a>
    <h5 class="px-4" style="color: #eeeeee; margin:0px;">Cronograma</h5>
</div>

<div class="offcanvas offcanvas-start cinza" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header fundo_menu shadow">
        <h5 class="offcanvas-title branco"id="offcanvasExampleLabel">Menu do Sistema</h5>
        <button type="button" class="btn btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">
        <div class="pb-3 px-3 branco">
            
        </div>
        <div class="accordion accordion-flush shadow" id="accordionFlushExample" ">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="btn accordion-button accordion-button-active-color collapsed fundocinza" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6 class="preto">Cadastros</h6>
                    </button>
                </h2>
                <!-- <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                    <ul class="list-group">
                            <li class="btn"><a style="text-decoration: none;" class=" d-grid gap-2" href="curso.php">Cadastre um Curso </a></li>
                            <li class="btn"><a style="text-decoration: none;" class=" d-grid gap-2" href="disciplina.php">Cadastre uma Disciplina</a></li>
                            <li class="btn"><a style="text-decoration: none;" class=" d-grid gap-2" href="prof.php">Cadastre um Professor</a></li>
                            <li class="btn"><a style="text-decoration: none;" class=" d-grid gap-2" href="turma.php">Cadastre uma Turma</a></li>
                            <li class="btn"><a style="text-decoration: none;" class=" " href="horario.php">Cadastre um Horário</a></li>
                        </ul>
                    </div>
                </div> -->
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-group">
                            <!-- <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="curso.php">Cadastre um Curso </a></li> -->
                            <!-- <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="disciplina.php">Cadastre uma Disciplina</a></li>
                            <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="prof.php">Cadastre um Professor</a></li>  -->
                            <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="disciplina.php?cod_curso=<?php echo $codCurso?>&cod_turma=<?php echo $codTurma ?>">Cadastre uma Disciplina</a></li>
                            <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="prof.php?cod_curso=<?php echo $codCurso?>&cod_turma=<?php echo $codTurma ?>">Cadastre um Professor</a></li>
                            <!-- <li class="list-group-item"><a href="turma.php">Cadastre uma Turma</a></li>
                            <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="horario.php">Cadastre um Horário</a></li> -->
                        </ul>



                    </div>
                </div>
            </div>
           
            
            <div class="accordion-item ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class=" btn accordion-button accordion-button-active-color collapsed fundocinza" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6 class="preto">Horario Aulas</h6>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                     <ul class="list-group">
                         <li class="btn list-group-item fundocinza"><a style="text-decoration: none;" class="preto" href="horario.php">Cadastre um Horario</a></li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
    <li class="list-group-item fundo_menu"><a href="index.php" style="text-decoration: none;" class="branco">Cronograma</a></li>
    <li class="list-group-item fundo_menu"><a href="?logout=true" style="text-decoration: none;" class="branco">Sair</a></li>
    </form>
</div>
