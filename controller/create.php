<?php
include '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUsuario = $_POST['nome_usuario'];
    $emailUsuario = $_POST['email_usuario'];
    $login = $_POST['login_usuario'];
    $senha = $_POST['senha_usuario'];
    $dataCadastro = $_POST['data_cadastro'];
    $telefone = $_POST['telefone_usuario'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, login_usuario, senha_usuario, data_cadastro, telefone_usuario, ativo) 
            VALUES ('$nomeUsuario', '$emailUsuario', '$login', '$senha', '$dataCadastro', '$telefone', $ativo)";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="create.php">
    Nome do Usuário: <input type="text" name="nome_usuario"><br>
    Email do Usuário: <input type="email" name="email_usuario"><br>
    Login do Usuário: <input type="text" name="login_usuario"><br>
    Senha do Usuário: <input type="password" name="senha_usuario"><br>
    Data de Cadastro: <input type="date" name="data_cadastro"><br>
    Telefone do Usuário: <input type="text" name="telefone_usuario"><br>
    Ativo: <input type="checkbox" name="ativo"><br>
    <input type="submit" value="Criar">
</form>