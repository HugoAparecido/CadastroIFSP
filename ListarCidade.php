<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('./includes/conexao.php');
    $sql = "SELECT * FROM cidade";
    // Executa a consulta
    $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>