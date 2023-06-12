<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('https://marketplace.canva.com/EAFYIWPCudg/1/0/1600w/canva-papel-de-parede-para-computador-astronauta-gal%C3%A1xia-preto-e-branco-lKp1cXK1ybY.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: 	#FFFFFF;
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
            background-color:#4CAF50;
            }
    </style>
</head>
<body>
   <center>
    <h1>LOGIN</h1>
    <form id="login" action="logado.php" method="POST" required>
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" id="entrar" value="Entrar">    
    </form>
  </center>
</body>
</html>
