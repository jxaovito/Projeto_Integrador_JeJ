<link rel="stylesheet" href="../../css/calendario_2.css">
<?php
    include_once(dirname(__FILE__). "/../banco.php");

    if (isset($_GET['cod_turma'])){
        $codTurma = $_GET['cod_turma'];
     } else {
        $codTurma = "";
     }
     
     if (isset($_GET['cod_curso'])){
         $codCurso = $_GET['cod_curso'];
      } else {
         $codCurso = "";
      }
    


    $sql = $pdo-> prepare('SELECT * from disciplina where cod_curso = '.$codCurso );
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($info as $key=> $values){
            $cor = $values['cor'];
            $nome = $values['nome'];
            $codDisciplina = $values['cod_disciplina'];
            echo " <div class='d-flex float-start mt-1 mx-2'. style='width:15px;height:15px;background-color: $cor'> </div>$nome<br>";

            echo "<a href='../admin/inc/deletar/delDisciplina.php?id=$codDisciplina&cod_curso=$codCurso&cod_turma=$codTurma'> | Excluir | </a>";

            // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

            echo '<hr>';
        }
    }

?>

<!-- <input type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
<input type="button" value="Voltar" onclick="parent.location='principal.php'"> -->