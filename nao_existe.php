<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email/senha inexistente</title>
    <style>
        body{
            font-family: sans-serif;
            background: linear-gradient(to right, rgb(211,211,211), rgb(128,128,128));
            text-align: center;
            color: rgb(202, 12, 12);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 15px;
        }
        .submit{
            text-align: center;
            text-decoration: none;
            background-color: rgb(0,0,0,0.5);
            color: white;
            padding: 15px;
            border-radius: 5px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="box">
        <!-- Aviso de email e/ou senha inexistentes -->
        <h1>Este email e/ou senha não existem!</h1>
        <h1>Tente outra conta ou cadastre-se no menu principal.</h1>
        <!-- Botões "Criar Conta" e "Voltar" -->
        <button class="submit" name="submit" id="submit"><a href="formulario.php">Criar Conta</a></button>
        <button class="submit" name="submit" id="submit"><a href="login.php">Voltar</a></button>
    </div>
</body>
</html>