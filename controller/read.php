<?php
include 'db.php';

$sql = "SELECT * FROM formas_atendimento";
$result = $conn->query($sql);              

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Usuário: " . $row["usuario"]. " - Nome do Atendimento: " . $row["nome_atendimento"]. " - Data de Cadastro: " . $row["data_cadastro"]. " - Ativo: " . ($row["ativo"] ? "Sim" : "Não"). "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>