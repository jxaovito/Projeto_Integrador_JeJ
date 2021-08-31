

    <?php
    include_once(dirname(__FILE__) . "/../banco.php");


    $sql = $pdo->prepare('SELECT * FROM professor');
    if ($sql->execute()) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        $i = 0;
        foreach ($info as $key => $values) {
            if ($i % 2 == 0) {
                $class=  "bg-light";
            } else {
                $class=  "";
            }
            echo '<div  class="d-flex flex-row p-3 '.$class.'">'; // apenas para se localizar
            echo '<div  class="d-flex align-items-center">';
            echo "<a class='btn btn-outline-danger' style='text-decoration:none;' href='../admin/inc/deletar/delProf.php?id=" . $values['cod_professor'] . "'>  Excluir  </a>";
            echo '</div>';
            echo '<div  class="px-2 flex-fill">';

            echo 'Nome: ' . $values['nome'] . '<br>';
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