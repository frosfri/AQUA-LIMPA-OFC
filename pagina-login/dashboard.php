<?php
include("conexao.php");

// Verificando se a conexão foi bem-sucedida
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Realizando a busca no banco de dados
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao, $sql);

if (!$result) {
    die("Erro ao executar a consulta: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>Nome do Usuário</th>
            <th>Data de Nascimento</th>
            <th>Email</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo($row['usuario']); ?></td>
                <td><?php echo($row['dtnasc']); ?></td>
                <td><?php echo($row['email']); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>

<?php
// Fechando a conexão com o banco de dados
mysqli_close($conexao);
?>
