<link rel="stylesheet" href="../../css/calendario_2.css">
<?php
    include_once(dirname(__FILE__). "/../banco.php");


    $sql = $pdo-> prepare('SELECT * FROM disciplina');
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($info as $key=> $values){
            $cor = $values['cor'];
            $nome = $values['nome'];
            echo " <div class='d-flex float-start mt-1 mx-2'. style='width:15px;height:15px;background-color: $cor'> </div>$nome<br>";

            echo "<a href='../../teste_calendario_jej/admin/inc/deletar/delDisciplina.php?id=".$values['cod_disciplina']."'> | Excluir | </a>";

            // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

            echo '<hr>';
        }
    }

?>

<!-- <input type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
<input type="button" value="Voltar" onclick="parent.location='principal.php'"> -->