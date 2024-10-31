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
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $uf = $_POST['uf'];
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $pais = $_POST['pais'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

// Verifica se o CPF já está cadastrado
$query = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo "Erro: O CPF $cpf já está cadastrado.";
  echo "<br><a href='cadastro_cliente.html'><button>Corrigir</button></a>";
} else {
  // Insere os dados no banco de dados
  $query = "INSERT INTO clientes (nome, sobrenome, cpf, rg, endereco, bairro, uf, cep, estado, pais, telefone, email) VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$endereco', '$bairro', '$uf', '$cep', '$estado', '$pais', '$telefone', '$email')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Cliente cadastrado com sucesso!";
    echo "<br><a href='cadastro_cliente.html'><button>Cadastrar novo cliente</button></a>";
  } else {
    echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
    echo "<br><a href='cadastro_cliente.html'><button>Tentar novamente</button></a>";
  }
}

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>