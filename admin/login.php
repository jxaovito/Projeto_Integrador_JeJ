
<?php
$titulo = "Administrador";
$is_login = true;

include_once('inc/usuario/executa_login.php');
include_once('inc/headerlogin.php');

// if($_SESSION['is_logged'] = true){

// }
?>

<div class="sidenav shadow">
         <div class="login-main-text">
            <h2>Seja bem-vindo!</h2>
            <p>Faça  seu login.</p>
         </div>  
         
            <img class="logo" src="img/1.png" alt="" width="510px" height="605px">
      </div>
      
      <div class="main">
         <div class="col-md-5 col-sm-12">
            <div class="login-form shadow">


            <form action="" method="post" class="my-5 f5 p-4 a">
                <!-- CAMPOS DE INSERIR EMAIL E SENHA -->
                <label class="form-label textmenu " for="id_email">Digite seu e-mail</label>
                <input type="email" name="email" id="id_email" class="form-control   " >
                <label class="form-label textmenu " for="id_senha">Digite sua senha</label>
                <input type="password" name="senha" id="id_senha" class="form-control ">
                <input type="submit" class=" botao bt btn btn-secondary mt-3 " value="Entrar" name="entrar">
                <br>
                          
            </form>



            </div>
         </div>
      </div>




<?php include_once('inc/footer.php'); ?>