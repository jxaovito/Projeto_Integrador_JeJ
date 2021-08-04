
<?php
    $titulo = "Administrador";
    //define que a página é um login para não
    //realizar o looping de redirecionamento
    $is_login = true;
    include_once("inc/header.php");

    include_once("inc/usuario/exec-login.php");
?>

<div class="container">
    <div class="row">
        <div class="col col-12">
            <form action="" method="post" class="my-5 shadow p-4" >
                <div class="form-control">
                    <label for="id_email">Digite seu e-mail</label>
                    <input type="email" name="email" id="id_email">
                </div>
                <div class="form-control">
                    <label for="id_senha">Digite sua senha</label>
                    <input type="password" name="senha" id="id_senha">
                </div>

                <input type="submit" value="entrar" class="bt btn-primary" name="entrar">
                <?php echo "$aviso"; ?>
            </form>
        </div>
    </div>
</div>

<?php
    include_once("inc/footer.php")
?>