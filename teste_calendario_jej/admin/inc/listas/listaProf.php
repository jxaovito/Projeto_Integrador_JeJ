<?php
    include_once(dirname(__FILE__). "/../banco.php");


    $sql = $pdo-> prepare('SELECT * FROM professor');
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($info as $key=> $values){
            echo 'Código: '.$values['cod_professor'].'<br>';
            echo 'Nome: '.$values['nome'].'<br>';
           

            echo "<a href='../../teste_calendario_jej/admin/inc/deletar/delProf.php?id=".$values['cod_professor']."'> | Excluir | </a>";
            // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

            echo '<hr>';
        }
    }

?>

<!-- <input type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
<input type="button" value="Voltar" onclick="parent.location='principal.php'"> -->