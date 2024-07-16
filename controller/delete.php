<?php
include '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $idUsuario = $_GET['id_usuario'];

    $sql = "DELETE FROM usuario WHERE id_usuario = '$idUsuario'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário deletado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>