<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
         body{
            color: black;
            background-color: #5F17E6;
            
        }
    </style>

</head>
<body>

<?php
if(isset($_POST['busca'])) {
    $pesquisa = $_POST['busca'] ?? '';
}

include "config.php";

$result = sprintf ("SELECT * FROM `usuarios`");

$dados = mysqli_query ($conexao, $result); // erro

?>


<a href="home.php" class="btn btn-primary" href="#" role="button">Voltar</a>
<!-- navbar -->
    <h1></h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- fim -->


<!-- pesquisa -->
<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="sistema.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Digite Aqui" aria-label="Search" name="busca">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
<!-- fim -->
<br>

<h1 style="color:#5F17E6">Seja Bem-Vindo !</h1>
<h4 style="color:#5F17E6">Em Nosso Sistema de Locação mais Querida do BRASIL !</h4>
<br>





    <a href="home.php" class="btn btn-secondary" href="#" role="button">Inicio</a>

</body>
</html>

<!-- tabela dados -->

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">Veiculo Alugado</th>
      <th scope="col">Valor Aluguel</th>
      <th scope="col">Data Retirada</th>
      <th scope="col">Data Devolução</th>
    </tr>
  </thead>
  <tbody>

  <?php

while ($linha = mysqli_fetch_assoc($dados) ) {
  $nome = $linha['nome'];
  $telefone = $linha['telefone'];
  $endereco = $linha['endereco'];
  $cpf = $linha['cpf'];
  $rg = $linha['rg'];
  $veiculo = $linha['veiculo'];
  $valor = $linha['valor'];
  $retirada = $linha['retirada'];
  $devolucao = $linha['devolucao'];


  echo "<tr>

  <th scope='row'>$nome</th>
  <td>$telefone</td>
  <td>$endereco</td>
  <td>$cpf</td>
  <td>$rg</td>
  <td>$veiculo</td>
  <td>$valor</td>
  <td>$retirada</td>
  <td>$devolucao</td>
</tr>";
}

?>

  </tbody>
</table>
  </form>
</nav>
  
