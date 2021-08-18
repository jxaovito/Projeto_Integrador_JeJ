
<div style="padding: 3px;" class="d-flex align-items-center mb-3 shadow fundo_menu">
    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <img  class="img-fluid " src="img/menularanja.png" alt="">
    </a>
    <h5 class="px-4" style="color: whitesmoke; margin:0px;">Cronograma</h5>
</div>

<div class="offcanvas offcanvas-start cinza" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header fundo_menu">
        <h5 class="offcanvas-title branco" id="offcanvasExampleLabel">Menu do Sistema</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">
        <div class="pb-3 px-3 branco">
            
        </div>
        <div class="accordion accordion-flush shadow" id="accordionFlushExample" ">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button accordion-button-active-color collapsed botaofundo " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6 class="branco">Cadastros</h6>
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
                <div id="flush-collapseOne" class=" botaofundo accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-group">
                            <li class="btn list-group"><a style="text-decoration: none;" class="branco" href="curso.php">Cadastre um Curso </a></li>
                            <li class="btn list-group"><a style="text-decoration: none;" class="branco" href="disciplina.php">Cadastre uma Disciplina</a></li>
                            <li class="btn list-group"><a style="text-decoration: none;" class="branco" href="prof.php">Cadastre um Professor</a></li>
                            <li class="btn list-group"><a style="text-decoration: none;" class="branco" href="turma.php">Cadastre uma Turma</a></li>
                            <li class="btn list-group"><a style="text-decoration: none;" class="branco" href="horario.php">Cadastre um Horário</a></li>
                        </ul>



                    </div>
                </div>
            </div>
           
            
            <div class="accordion-item pt-0">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed botaofundo" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6 class="branco">Horario Aulas</h6>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse botaofundo" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> <a style="text-decoration: none;" class="branco" href="horario.php">Cadastre um Horario</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <li class="list-group-item botaofundo"><a href="index.php" style="text-decoration: none;" class="branco">Cronograma</a></li> -->
    <li class="list-group-item fundo_menu"><a href="?logout=true" style="text-decoration: none;" class="branco">Sair</a></li>
    </form>
</div>
