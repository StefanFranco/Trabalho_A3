<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUsuario = $_POST['id_usuario'];
    $nomeUsuario = $_POST['nome_usuario'];
    $emailUsuario = $_POST['email_usuario'];
    $login = $_POST['login_usuario'];
    $senha = $_POST['senha_usuario'];
    $telefone = $_POST['telefone_usuario'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql = "UPDATE usuario 
            SET nome_usuario='$nomeUsuario', email_usuario='$emailUsuario', login_usuario='$login', senha_usuario='$senha', data_cadastro='$dataCadastro', telefone_usuario='$telefone', ativo=$ativo 
            WHERE id_usuario='$idUsuario'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>