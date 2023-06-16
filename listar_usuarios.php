<?php
session_start();
// Supondo que você tenha uma lista de usuários armazenada em uma variável $usuarios
$usuarios = array(
    array('nome' => 'Usuário 1', 'email' => 'usuario1@example.com'),
    array('nome' => 'Usuário 2', 'email' => 'usuario2@example.com'),
    array('nome' => 'Usuário 3', 'email' => 'usuario3@example.com')
);
?>
<html>
<head>
    <style>
        body {
            background-image: url('https://p4.wallpaperbetter.com/wallpaper/726/716/933/digital-digital-art-artwork-simple-background-stars-hd-wallpaper-preview.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #FFFFFF;
        }
        
        h1 {
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
        }
        
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        a {
            color: #FFFFFF;
            text-decoration: none;
            margin-right: 10px;
        }
        
        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
  <center>
    <h1>Listagem de Usuários</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario['nome'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a>
  </center>
</body>
</html>
