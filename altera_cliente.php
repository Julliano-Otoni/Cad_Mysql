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

  // Seleciona os dados do cliente
  $query = "SELECT * FROM clientes WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  // Exibe os dados do cliente
  $row = mysqli_fetch_assoc($result);

  // Altera os dados do cliente
  if (isset($_POST['alterar'])) {
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

    // Atualiza os dados do cliente
    $query = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', rg = '$rg', endereco = '$endereco', bairro = '$bairro', uf = '$uf', cep = '$cep', estado = '$estado', pais = '$pais', telefone = '$telefone', email = '$email' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    // Verifica se a atualização foi bem-sucedida
    if ($result) {
      echo "Cliente alterado com sucesso!";
    } else {
      echo "Erro ao alterar cliente: " . mysqli_error($conn);
    }
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>

<form action="" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>"><br><br>
  <label for="sobrenome">Sobrenome:</label>
  <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $row['sobrenome']; ?>"><br><br>
  <label for="cpf">CPF:</label>
  <input type="text" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>"><br><br>
  <label for="rg">RG:</label>
  <input type="text" id="rg" name="rg" value="<?php echo $row['rg']; ?>"><br><br>
  <label for="endereco">Endereço:</label>
  <input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>"><br><br>
  <label for="bairro">Bairro:</label>
  <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>"><br><br>
  <label for="uf">UF:</label>
  <input type="text" id="uf" name="uf" value="<?php echo $row['uf']; ?>"><br><br>
  <label for="cep">CEP:</label>
  <input type="text" id="cep" name="cep" value="<?php echo $row['cep']; ?>"><br><br>
  <label for="estado">Estado:</label>
  <input type="text" id="estado" name="estado" value="<?php echo $row['estado']; ?>"><br><br>
  <label for="pais">País:</label>
  <input type="text" id="pais" name="pais" value="<?php echo $row['pais']; ?>"><br><br>
  <label for="telefone">Telefone:</label>
  <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>"><br><br>
  <label for="email">E-mail:</label>
  <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
  <input type="submit" name="alterar" value="Alterar">
</form>
<a href="lista_clientes.php">Voltar para a lista de clientes</a>