<?php

    @session_start();
    $logado = isset($_SESSION ['is_logged']) ? $_SESSION['is_logged'] : false;

    if(isset($_GET['logout'])){
        session_destroy();
    }
    if(!$logado && !isset($is_login)){
        header("location:login.php");
        session_destroy();
    } 

?>