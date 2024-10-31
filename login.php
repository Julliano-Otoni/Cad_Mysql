<!-- login.php -->
<?php
  // Conecta ao banco de dados
  //$conn = mysqli_connect("localhost", "root", "", "sistema_clinica");
  $conn = mysqli_connect("br790.hostgator.com.br", "biolo244_aulas", "Jsotoni@12", "biolo244_aulas");

  // Verifica se a conexão foi estabelecida com sucesso
  if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  // Captura os dados do formulário
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  // Verifica se o usuário e senha estão corretos
  $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
  $result = mysqli_query($conn, $query);

  // Verifica se o usuário foi encontrado
  if (mysqli_num_rows($result) > 0) {
    // Cria uma sessão
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
  } else {
    echo "Usuário ou senha incorretos";
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>