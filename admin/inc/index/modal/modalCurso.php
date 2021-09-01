<?php
include_once(dirname(__FILE__) . "/../../cadastros/cadCurso.php");
?>
<div class="modal fade" id="modalCurso" tabindex="-1" aria-labelledby="modalCursolabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title bold" id="modalCursolabel">CADASTRO CURSO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="">
                        <?php
                        $rand = rand();
                        $_SESSION['rand'] = $rand;
                        ?>

                        <div class="mb-3">

                            <input type="text" name="nomeCurso" id="nomeCurso" required class="form-control" placeholder="Digite o nome do Curso:">
                            <div class="modal-footer">
                                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                                <input type="submit" name="ccurso" value="Cadastrar" class="btn btn-primary">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>