<?php
include("conexao.php");

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';


$verificaLogin = "SELECT * FROM login WHERE login = '$login'";
$result = mysqli_query($conexao, $verificaLogin);

if (mysqli_num_rows($result) > 0) {
    echo "Este login já está em uso. Por favor, escolha outro login.";
} else {
    $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
    $query = mysqli_query($conexao, $insert);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body {
        background-image: url('https://i.pinimg.com/736x/e0/ef/2a/e0ef2ac8dbde9d21d7b68a189443cb78.jpg');
        background-size: cover;
        font-family: Arial, sans-serif;
        color: #FFFFFF;
        }
    </style>
</head>
<body>

</body>
</html>
