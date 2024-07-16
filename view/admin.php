<?php
include 'db.php';

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>"; // Open the table outside the loop for better structure
  echo "
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Nome</th>
      <th>Cargo</th>
      <th>Ativo</th>
      <th>Ações</th> </tr>
  ";

  while ($row = $result->fetch_assoc()) {
    $isActive = $row['ativado'] == 1 ? 'Sim' : 'Não'; // Convert 'ativado' value to more user-friendly text

    echo "
      <tr>
        <td>{$row['idUsuario']}</td>
        <td>{$row['emailUsuario']}</td>
        <td>{$row['nomeUsuario']}</td>
        <td>{$row['cargoUsuario']}</td>
        <td>$isActive</td>  <td>
          <a href='./editar_usuario.php?id={$row['idUsuario']}' title='Editar Usuário'><i class='fa-solid fa-pen icone'></i> Editar</a>
          <a href='../src/controller/excluir_usuario.php?id={$row['idUsuario']}' title='Excluir Usuário' onclick='return confirm(\"Deseja realmente excluir este usuário?\");'><i class='fa-solid fa-x icone'></i> Excluir</a>
        </td>
      </tr>
    ";
  }

  echo "</table>"; // Close the table after the loop
} else {
  echo "0 resultados";
}

$conn->close();
?>

<body>
<script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>