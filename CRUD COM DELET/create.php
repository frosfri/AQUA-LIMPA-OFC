<?php require 'conexao.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Adicionar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-4">
  <div class="card">
    <div class="card-header"><h4>Adicionar Usuário</h4></div>
    <div class="card-body">
      <form action="code.php" method="POST">
        <div class="mb-3">
          <label>Nome</label>
          <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Senha</label>
          <input type="password" name="senha" class="form-control" required>
        </div>
        <button type="submit" name="salvar_usuario" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
