<?php
include('./includes/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "DELETE cidade SET nome = '$nome', estado = '$estado' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Cidade Deletada!";
    else
        echo "Erro ao deletar a cidade!\n" . mysqli_error($con);
    ?>
    <button class="botao"><a href="./ListarCidade.php">Voltar</a></button>
</body>

</html>