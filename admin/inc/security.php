<?php

session_start();

// pegunta se a variavel is_logged na sessão foi setada
// e define $logado como true

$logado = isset($_SESSION['is_logged'])? $_SESSION['is_logged'] : false;

//pegunta se há uma variável na url
//contendo logout
//se tiver destroy
if(isset($_GET['logout'])){
    session_destroy();
}

if(!$logado   &&  !isset($is_login)){
    header("location:login.php");
}

// if(isset($is_login)){
//     pessoa tentando fazer login
// }else{
//     if($logado){
//         a pessoa já fez login
//     }else{
//         manda ela pro login
//         header("location:login.php");
//     }
// }

?>