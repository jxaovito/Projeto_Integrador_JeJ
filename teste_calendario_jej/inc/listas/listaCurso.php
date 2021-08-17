<?php
    include_once(dirname(__FILE__). "/../banco.php");


    $sql = $pdo-> prepare('SELECT * FROM curso');
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($info as $key=> $values){
            echo 'Código: '.$values['cod_curso'].'<br>';
            echo 'Nome: '.$values['nome'].'<br>';

            echo "<a href='../admin/inc/deletar/delCurso.php?id=".$values['cod_curso']."'> | Excluir | </a>";
            // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

            echo '<hr>';
        }
    }

?>

<!-- <input type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
<input type="button" value="Voltar" onclick="parent.location='principal.php'"> -->