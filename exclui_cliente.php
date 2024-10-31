<?php
  // Conecta ao banco de dados
  //$conn = mysqli_connect("localhost", "root", "", "sistema_clinica");
  $conn = mysqli_connect("br790.hostgator.com.br", "biolo244_aulas", "Jsotoni@12", "biolo244_aulas");

  // Verifica se a conexão foi estabelecida com sucesso
  if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  // Captura o ID do cliente
  $id = $_GET['id'];

  // Exclui o cliente
  $query = "DELETE FROM clientes WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  // Verifica se a exclusão foi bem-sucedida
  if ($result) {
    echo "Cliente excluído com sucesso!";
  } else {
    echo "Erro ao excluir cliente: " . mysqli_error($conn);
  }

    // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>

<a href="lista_clientes.php">Voltar para a lista de clientes</a>