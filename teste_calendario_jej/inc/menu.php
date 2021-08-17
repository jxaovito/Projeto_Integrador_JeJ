<div class="d-flex align-items-center mb-3 shadow">
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <h6>Menu</h6>
    </a>
    <h5 class="px-5">Bem vindo ao Administrador</h5>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu do Sistema</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="pb-3 px-3">
            <h6>Cabeça de guidão</h6>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6>Cadastros</h6>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-group">
                            <li class="list-group-item"><a class="teste" href="curso.php">Cadastre um Curso </a></li>
                            <li class="list-group-item"><a href="disciplina.php">Cadastre uma Disciplina</a></li>
                            <li class="list-group-item"><a href="prof.php">Cadastre um Professor</a></li>
                            <li class="list-group-item"><a href="turma.php">Cadastre uma Turma</a></li>
                            <li class="list-group-item"><a href="horario.php">Cadastre um Horário</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <h6>Suporte</h6>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Obtenha ajuda contatando a Corporação Johns and Johns </div>
                </div>
            </div>
            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6> Horario Aulas</h6>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> <a href="horario.php">Cadastre um Horario</a></div>
                </div>
            </div> -->
        </div>
    </div>
    <li class="list-group-item"><a href="index.php">iNDEX</a></li>
    <li class="list-group-item"><a href="?logout=true">Sair</a></li>
    </form>
</div>