<?php
$titulo = "Administrador";
$is_login = true;

include_once('inc/usuario/executa_login.php');
include_once('inc/header.php');

// if($_SESSION['is_logged'] = true){

// }
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="post" class="my-5 shadow p-4">

                <label class="form-label" for="id_email">Digite sua e-mail</label>
                <input type="email" name="email" id="id_email" class="form-control" >
                <label class="form-label" for="id_senha">Digite sua senha</label>
                <input type="password" name="senha" id="id_senha" class="form-control">
                <input type="submit" class="bt btn-primary mt-3" value="Entrar" name="entrar">
                <?php echo $aviso ;?>
                
            </form>
        </div>
    </div>
</div>

<?php include_once('inc/footer.php'); ?>
