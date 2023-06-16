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
    <h1>Olá,
        <?php
        if(isset($_SESSION['nome']) == null){
            echo "visitante";
        } else{
            echo $_SESSION['nome'];
            if (isset($_SESSION['nome'])) {
                echo '<br>';
                echo '<a href="cadastrar.php">Cadastrar</a>';
                echo '<br>';
                echo '<a href="alterar_senha.php">Alterar Senha</a>';
                echo '<br>';
                echo '<a href="listar_usuarios.php">Listar Usuários</a>';
                echo '<br>';
                echo '<a href="logout.php">Sair</a>';
            }
        }
        ?>
    </h1>
    <?php if(isset($_SESSION['nome']) == null) { ?>
    <a href="login.php">Login</a>
    <?php } ?>
  </center>
</body>
</html>

