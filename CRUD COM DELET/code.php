<?php
require 'conexao.php';

if (isset($_POST['salvar_usuario'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO noite (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    mysqli_query($conexao, $sql);
    header("Location: index.php");
    exit();
}

if (isset($_POST['delete_usuario'])) {
    $id = $_POST['delete_usuario'];
    mysqli_query($conexao, "DELETE FROM noite WHERE id = $id");
    header("Location: index.php");
    exit();
}

if (isset($_POST['atualizar_usuario'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE noite SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location: index.php");
    exit();
}

if (isset($_POST['vizualizar_usuario'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE noite SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location: index.php");
    exit();
}
?>
