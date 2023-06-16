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
      
      h1 {
        font-size: 24px;
        text-align: center;
        margin-top: 50px;
      }
      
      form {
        text-align: center;
        margin-top: 30px;
      }
      
      input[type="text"],
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
        background-color: #45a049;
      }
    </style>
</head>
<body>
  <center>
    <h1>CADASTRO</h1>
    <form id="cadastro" action="cadastro.php" method="POST" required>
        Nome: <input type="text" name="nome" required><br>
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" id="cadastrar" value="Cadastrar">
    </form>
  </center>
</body>
</html>



