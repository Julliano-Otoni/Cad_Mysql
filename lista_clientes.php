<!DOCTYPE html>
<html>
<head>
  <title>Lista de Clientes</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <h1>Lista de Clientes</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>CPF</th>
      <th>RG</th>
      <th>Endereço</th>
      <th>Bairro</th>
      <th>UF</th>
      <th>CEP</th>
      <th>Estado</th>
      <th>Pais</th>
      <th>Telefone</th>
      <th>E-mail</th>
      <th>Ações</th>
    </tr>
    <?php
      include 'lista_cliente.php';
    ?>
  </table>
</body>
</html>