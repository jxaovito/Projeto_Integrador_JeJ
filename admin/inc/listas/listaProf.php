<?php
include_once(dirname(__FILE__) . "/../banco.php");


if (isset($_GET['cod_turma'])) {
    $codTurma = $_GET['cod_turma'];
} else {
    $codTurma = "";
}

if (isset($_GET['cod_curso'])) {
    $codCurso = $_GET['cod_curso'];
} else {
    $codCurso = "";
}


$sql = $pdo->prepare('SELECT * FROM professor where cod_curso='.$codCurso.' AND cod_turma='.$codTurma);
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
    foreach ($info as $key => $values) {
        if ($i % 2 == 0) {
            $class =  "bg-light";
        } else {
            $class =  "";
        }
        $codProf = $values['cod_professor'];

        echo '<div  class="d-flex flex-row p-3 ' . $class . '">'; // apenas para se localizar

       

        echo '<div  class="px-2 flex-fill">';
        echo '<h6> Professor: </h6>' . ucwords($values['nome']) . '<br>';
        echo '</div>';
        
        echo '<div  class="d-flex align-items-center">';
        // echo "<a class='btn btn-outline-danger' style='text-decoration:none;' href='../admin/inc/deletar/delProf.php?id=" . $values['cod_professor'] . "'>  Excluir  </a>";
        echo "<a class='btn btn-sm btn-outline-danger' style='text-decoration:none;' href='../admin/inc/deletar/delProf.php?id=$codProf&cod_curso=$codCurso&cod_turma=$codTurma'>  Excluir  </a>";
        echo '</div>';

        // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

        // echo '<hr>';
        echo '</div>'; // fim flex-container
        $i++;
    }
}

?>

<!-- <input type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
<input type="button" value="Voltar" onclick="parent.location='principal.php'"> -->