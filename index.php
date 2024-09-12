<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <title>Início</title>
  <?php
  include('./inicia_sessao.php');
  if (empty($_SESSION['login'])) {
    header('Location: login.html');
  }
  // session_destroy();
  ?>
</head>

<body>
  <?php
  if (!empty($_SESSION['login'])):
  ?>
  <li><a href="logout.php">Logout</a></li>
  <?php
  echo "<li><a href=''>OLá " . $_SESSION['login']['nome'] . "</a></li>";
  endif;
  ?>
  <div class="principal flex">
    <div class="flex inverter_column">
      <h2>Cidade</h2>
      <button class="botao">
        <a href="./Cidade/CadastroCidade.html">Cadastrar Cidade</a>
      </button>
      <button class="botao">
        <a href="./Cidade/ListarCidade.php">Visualizar Cidade</a>
      </button>
    </div>
    <div class="flex inverter_column">
      <h2>Cliente</h2>
      <button class="botao">
        <a href="./Cliente/CadastroCliente.php">Cadastrar Cliente</a>
      </button>
      <button class="botao">
        <a href="./Cliente/ListarCliente.php">Visualizar Cliente</a>
      </button>
    </div>
  </div>
</body>

</html>