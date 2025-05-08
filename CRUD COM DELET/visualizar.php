<?php
require 'conexao.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = intval($_GET['id']);
$resultado = mysqli_query($conexao, "SELECT * FROM noite WHERE id = $id");

if (mysqli_num_rows($resultado) === 0) {
    echo "Usuário não encontrado.";
    exit();
}

$usuario = mysqli_fetch_assoc($resultado);
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Visualizar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-4">
  <div class="card">
    <div class="card-header"><h4>Detalhes do Usuário</h4></div>
    <div class="card-body">
      <p><strong>ID:</strong> <?= $usuario['id']; ?></p>
      <p><strong>Nome:</strong> <?= $usuario['nome']; ?></p>
      <p><strong>Email:</strong> <?= $usuario['email']; ?></p>
      <p><strong>Senha:</strong> <?= $usuario['senha']; ?></p>
      <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
</div>
</body>
</html>
