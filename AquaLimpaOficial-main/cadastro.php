<?php
require 'conexao.php';

    $nome = $_POST['nome'];
    $dtnasc = $_POST['dtnasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    

        
        $sql = "INSERT INTO usuario (nome, dtnasc ,email, senha) VALUES ('$nome','$dtnasc', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
header("location:pag_inicial.html");
          
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    


?>