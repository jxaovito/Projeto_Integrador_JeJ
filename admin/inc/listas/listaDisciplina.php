<?php
    include_once(dirname(__FILE__). "/../banco.php");

    // PUXA TURMA E CURSO PELO CODIGO
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
    

// FORMA A LISTA DAS DISCIPLINAS
    $sql = $pdo-> prepare('SELECT * from disciplina where cod_curso = '.$codCurso );
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        $i = 0;
        foreach($info as $key=> $values){
            if ($i % 2 == 0) {
                $class =  "bg-light";
            } else {
                $class =  "";
            }

            // DA VALOR ÀS VARIÁVEIS PUXADAS DO BANCO
            $cor = $values['cor'];
            $nome = ucwords($values['nome']);
            $codDisciplina = $values['cod_disciplina'];

            // MOSTRA AS INFORMAÇÕES NA TELA
            echo '<div  class="d-flex flex-row p-3 ' . $class . '">'; // apenas para se localizar

            echo '<div  class="px-2 flex-fill">';
            echo " <div class='d-flex float-start mt-1 mx-2'. style='width:15px;height:15px;background-color: $cor'> </div>$nome<br>";
            echo '</div>';

            echo "<a class='btn btn-sm btn-outline-danger' href='../admin/inc/deletar/delDisciplina.php?id=$codDisciplina&cod_curso=$codCurso&cod_turma=$codTurma'> Excluir  </a>";

            echo '</div>';
            $i++;
        }
    }

?>