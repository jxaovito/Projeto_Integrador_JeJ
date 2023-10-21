<?php

@session_start();
include_once('../banco/banco.php');
$aviso = "";

// VERIFICA SE EMAIL E SENHA ESTÃO CADASTRADOS NO BANCO E MOSTRA O AVISO
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (strlen(($email) < 4)) {
        $aviso .= "Você precisa digitar um email";
    }

    if (strlen(($senha) < 3)) {
        $aviso .= "Você precisa digitar sua senha";
    }
} elseif (isset($_POST) && count($_POST) > 0) {
    $aviso .= "Dados inválidos";
}


if (isset($_POST['entrar'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare('SELECT * FROM administrador WHERE email = ? AND senha = ?');
    if ($sql->execute(array($email, $senha))) {

        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        if (count($info) > 0) {
            foreach ($info as $key => $values) {
                $_SESSION['nome'] = $values['nome'];
                $_SESSION['is_logged'] = true;
            }
            header('location:index.php');
            
        } else {
            $aviso .= '<div class="alert alert-danger">Email ou senha errado</div>';
        }
    }
}

