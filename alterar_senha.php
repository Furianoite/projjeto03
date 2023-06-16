<?php
session_start();
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
        
        form {
            text-align: center;
            margin-top: 30px;
        }
        
        input[type="password"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color:#4CAF50;
        }
    </style>
</head>
<body>
  <center>
    <h1>Alteração de Senha</h1>
    <form id="alterar-senha" action="alterar_senha.php" method="POST" required>
        Nova Senha: <input type="password" name="nova_senha" required><br>
        Confirmar Senha: <input type="password" name="confirmar_senha" required><br><br>
        <input type="submit" id="confirmar" value="Confirmar">    
    </form>
    <br>
    <a href="index.php">Voltar</a>
  </center>
</body>
</html>
