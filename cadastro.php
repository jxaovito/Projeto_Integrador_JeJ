<?php

include_once(dirname(__FILE__). "/../banco.php");

if ($_POST) {
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];
    if ($senha == "") {
        $mensagem = "<span><b>Aviso</b>: Senhas precisam ser iguais!</span>";
    } else if ($senha == $csenha) {
        if (isset($_POST['cadastrar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = $pdo->prepare("SELECT * FROM alunos where email = ?");
            if ($sql->execute(array($email))) {
                if ($sql->rowCount() > 0) {
                    echo "Usuário já existe";
                } else {
                    $sql = $pdo->prepare("INSERT INTO alunos(codigo,nome,email,senha)
                        values (null,?,?,?)");
                    if ($sql->execute(array($nome, $email, $senha))) {
                        echo 'Dados cadastrados com sucesso.';
                        header('location:login.php');
                    } else {
                        echo 'Dados não encontrados!!';
                    }
                }
            }
        }
    } else {
        echo "senhas precisam ser iguais";
        
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css">
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <br>
        <input type="email" name="email" placeholder="E-mail" required>
        <br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br>
        <input type="password" name="csenha" placeholder="Confirmar Senha" required>
        <br>
        <input type="submit" name="cadastrar" value="CADASTRAR">
    </form>
</body>

</html>