<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #1b1b1b, #3a3a3a); /* Preto */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #2c3e50;
            padding: 40px;
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: none;
            outline: none;
            font-size: 15px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        input[type="submit"] {
            background-color: #ff3b3f; /* Vermelho */
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff5357; /* Vermelho mais claro */
        }
        .btnVoltar {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        .btnVoltar:hover {
            background: linear-gradient(to right, #ff9770, #ffc791);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <a class="btnVoltar" href="home.php">Voltar</a>
    </div>
</body>
</html>