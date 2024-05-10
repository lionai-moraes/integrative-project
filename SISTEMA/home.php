<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>home</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #1e1e1e; /* Preto */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #2c3e50; /* Azul escuro */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            margin-bottom: 30px;
            color: #ff3b3f; /* Vermelho */
            font-size: 28px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .btn {
            background-color: #ff3b3f; /* Vermelho */
            border: 2px solid #ff3b3f; /* Vermelho */
            padding: 15px 30px;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            margin: 10px; /* Espaçamento entre os botões */
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn:hover {
            background-color: #d63031; /* Vermelho mais escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seu portal</h1>
        <a href="login.php" class="btn">Login Administrativo</a>
        <a href="formulario.php" class="btn">Cadastre-se</a>
        <a href="../index.html" class="btn">Sair</a>
    </div>
</body>
</html>
