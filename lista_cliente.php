<?php
  // Conecta ao banco de dados
  //$conn = mysqli_connect("localhost", "root", "", "sistema_clinica");
  $conn = mysqli_connect("br790.hostgator.com.br", "biolo244_aulas", "Jsotoni@12", "biolo244_aulas");

  // Verifica se a conexão foi estabelecida com sucesso
  if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  // Seleciona os dados dos clientes
  $query = "SELECT * FROM clientes";
  $result = mysqli_query($conn, $query);

  // Exibe os dados dos clientes
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['sobrenome'] . "</td>";
    echo "<td>" . $row['cpf'] . "</td>";
    echo "<td>" . $row['rg'] . "</td>";
    echo "<td>" . $row['endereco'] . "</td>";
    echo "<td>" . $row['bairro'] . "</td>";
    echo "<td>" . $row['uf'] . "</td>";
    echo "<td>" . $row['cep'] . "</td>";
    echo "<td>" . $row['estado'] . "</td>";
    echo "<td>" . $row['pais'] . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td><a href='altera_cliente.php?id=" . $row['id'] . "'>Alterar</a> | <a href='exclui_cliente.php?id=" . $row['id'] . "'>Excluir</a></td>";
    echo "</tr>";
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>