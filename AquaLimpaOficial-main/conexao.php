<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$banco = "AQUALIMPA";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
} else {
    // echo "Conexão bem-sucedida!";
}
?>