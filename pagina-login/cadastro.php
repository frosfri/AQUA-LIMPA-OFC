<?php
include("conexao.php");


    $usuario = $_POST['usuario'] ;
    $dtnasc = $_POST['dtnasc'] ;
    $email = $_POST['email'] ;
    $senha = $_POST['senha'] ;

    $sql = "INSERT INTO usuario (usuario, dtnasc, email, senha) 
            VALUES ('$usuario', '$dtnasc', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        header('Location: painel.html');
        
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>
