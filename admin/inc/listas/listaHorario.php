<?php
    include_once(dirname(__FILE__). "/../banco.php");


    $sql = $pdo-> prepare('SELECT calendario.cod_calendario, calendario.horario_ini, calendario.horario_fim , curso.nome as nomecurso, disciplina.nome as nomedisciplina, professor.nome as nomeprofessor, turma.nome as nometurma, calendario.dia FROM calendario 
                                                                            left join curso on calendario.cod_curso = curso.cod_curso
                                                                            left join disciplina on calendario.cod_disciplina = disciplina.cod_disciplina 
                                                                            left join professor on calendario.cod_professor = professor.cod_professor 
                                                                            left join turma on calendario.cod_turma = turma.cod_turma ');
    if($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($info as $key=> $values){


            echo 'Código: '.$values['cod_calendario'].'<br>';
            $dataFormatadaIni = date('H:i' , strtotime($values['horario_ini']));
            $dataFormatadaFim = date('H:i' , strtotime($values['horario_fim']));
            echo 'Horário de início: '.$dataFormatadaIni.'<br>';
            echo 'Horário do fim: '.$dataFormatadaFim.'<br>';
            echo 'Curso: '.$values['nomecurso'].'<br>';
            echo 'Disciplina: '.$values['nomedisciplina'].'<br>';
            echo 'Professor: '.$values['nomeprofessor'].'<br>';
            echo 'Turma: '.$values['nometurma'].'<br>';
            echo 'Data: '.$value['data'].'<br>';


            // echo "<a href='altUsuario.php?id=".$values['codigo']."'> | Alterar |</a>";

            echo '<hr>';
        }
    }
?>