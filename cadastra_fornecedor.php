<?php
  // Conecta ao banco de dados
  //$conn = mysqli_connect("localhost", "root", "", "sistema_clinica");
  $conn = mysqli_connect("br790.hostgator.com.br", "biolo244_aulas", "Jsotoni@12", "biolo244_aulas");

  // Verifica se a conexão foi estabelecida com sucesso
  if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  // Captura os dados do formulário
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cnpj = $_POST['CNPJ'];
  $insc = $_POST['INSC'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $uf = $_POST['uf'];
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $pais = $_POST['pais'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

  // Insere os dados no banco de dados
  $query = "INSERT INTO fornecedores (nome, sobrenome, CNPJ, INSC, endereco, bairro, uf, cep, estado, pais, telefone, email) VALUES ('$nome', '$sobrenome', '$cnpj', '$insc', '$endereco', '$bairro', '$uf', '$cep', '$estado', '$pais', '$telefone', '$email')";
  $result = mysqli_query($conn, $query);

  // Verifica se a inserção foi realizada com sucesso
if ($result) {
  echo "Fornecedor cadastrado com sucesso!";
  echo "<br><a href='cadastro_fornecedor.html'><button>Cadastrar novo fornecedor</button></a>";
} else {
  echo "Erro ao cadastrar fornecedor: " . mysqli_error($conn);
  echo "<br><a href='cadastro_fornecedor.html'><button>Tentar novamente</button></a>";
}

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>