<?php
include('../includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="principal flex inverter_column">
      <form action="./AlteraClienteExe.php" method="post">
        <fieldset>
          <legend>Cadastro de Cidades</legend>
          <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" />
          </div>
          <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" />
          </div>
          <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha'] ?>" />
          </div>
          <div>
            <label>Ativo:</label>
            <input type="radio" name="ativo" id="AtivoSim" value="sim" <?php echo $row['ativo'] == true ? "checked":"" ?>/><label id="AtivoSim">Sim</label>
            <input type="radio" name="ativo" id="AtivoNao" value="nao" <?php echo $row['ativo'] == false ? "checked":"" ?>/><label id="AtivoNao">Não</label>
          </div>
          <input type="hidden" name='id' value='<?php echo $row['id']?>'>
          <div>
            <button class="botao_submit" type="submit">Cadastrar</button>
          </div>
        </fieldset>
      </form>
      <button class="botao"><a href="../index.html">Voltar</a></button>
    </div>
  </body>
</html>
