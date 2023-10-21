
<?php
$titulo = "Administrador";
$is_login = true;

include_once('executa_login.php');
include_once('inc/headerlogin.php');

// if($_SESSION['is_logged'] = true){

// }
?>

      <div class="main">
         <div class="col-md-5 col-sm-12">
            <div class="login-form shadow">
            <form action="" method="post" class="p-4 a">
                <!-- CAMPOS DE INSERIR EMAIL E SENHA -->
                <label class="form-label textmenu " for="id_email">Digite seu e-mail</label>
                <input type="email" name="email" id="id_email" class="form-control   " >
                <label class="form-label textmenu " for="id_senha">Digite sua senha</label>
                <input type="password" name="senha" id="id_senha" class="form-control ">
                <input type="submit" class="botaoentrar btn btn-secondary" value="Entrar" name="entrar">
                <br>
                <br>
               
            </form>
            </div>
         </div>
      </div>




<?php include_once('inc/footer.php'); ?>