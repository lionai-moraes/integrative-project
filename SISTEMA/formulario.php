<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO adm(nome,email,telefone,cidade,estado,endereco) 
    VALUES ('$nome','$email','$telefone','$cidade','$estado','$endereco')");

    header('Location: ../index.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #1e1e1e; /* Preto */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .box {
            color: white;
            background-color: #2c3e50; /* Azul escuro */
            padding: 15px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px; /* Limiting width for larger screens */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        fieldset {
            border: 3px solid transparent; /* Removendo as bordas vermelhas */
            margin: 0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Adicionando uma sombra sutil */
        }

        legend {
            border: 1px solid #ff3b3f; /* Vermelho */
            padding: 10px;
            text-align: center;
            background-color: #ff3b3f; /* Vermelho */
            border-radius: 8px;
            color: white;
            margin: 0 auto 20px; /* Centralizando e adicionando espaço na parte inferior */
            width: fit-content; /* Ajustando a largura conforme o conteúdo */
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: #ff3b3f; /* Vermelho */
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(241, 81, 81), rgb(220, 20, 20));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(255, 2, 2), rgb(243, 61, 85));
        }

        .checkbox-container label a {
            color: #4a90e2;
            text-decoration: none;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-back {
            background-color: #ff3b3f; /* Vermelho */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
            margin-left: 10px;
        }

        .btn-back:hover {
            background-color: #d63031; /* Vermelho mais escuro */
        }

        @media only screen and (max-width: 600px) {
            .box {
                width: 95%; /* Adjusting width for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <!-- <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br> -->
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="checkbox-container">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Concordo com os <a href="Aceite.php">Termos de Uso</a>.</label>
            </div>
                <br>
                <input type="submit" name="submit" id="submit">
                <div class="button-container">
                    <a href="home.php" class="btn-back">Voltar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>

