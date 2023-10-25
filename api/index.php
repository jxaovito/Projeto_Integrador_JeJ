<?php

$rand = rand();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="usuario/css/estilo.css">
    <link rel="stylesheet" href="usuario/css/tetris.css">
    <link rel="stylesheet" href="admin/css/index.css">
    <link rel="stylesheet" href="usuario/css/index.css">
    <link href="usuario/css/arthur.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link rel="icon" type="image/x-icon" href="img/calendario.png"> -->

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body class="indexfundo">

<?php
$titulo = "Página inicial";
include_once('banco/banco.php');


?>
    

<div class="container">
    <div class="row tituloindex1">
   <img class="calendarioindex" src="usuario/img/calendario.png" alt="">
    <h1 class="">Bem vindo(a) ao cronograma online!</h1>
    <h2 class="">Escolha abaixo como quer entrar no sistema</h2>
  
    </div>
    <div class="tituloindex1">
    <a href="usuario/index.php" style="text-decoration: none;" class="">
    <button class="btn-entrar-index fourth-3">Entrar como usuário</button>
    </a>
    <a href="admin/login.php" style="text-decoration: none;" class="">
    <button class="btn-sair-index fourth-2">Entrar como administrador</button>
    </a>
    </div>
</div>
</body>

<?php include_once('usuario/inc/footer.php'); ?>