<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
        font-family: sans-serif;
        background: linear-gradient(to right, rgb(211,211,211), rgb(128,128,128));
        text-align: center;
        color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
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
        .imgBox{
            display: flex;
            justify-content: flex-start;
        }
        footer{
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            color: rgb(96, 93, 99);
            background: rgb(13, 12, 14);
            height: 300px;
            text-align: center;
            align-content: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="imgBox">
        <img src="robo_login.jpg" height="600" width="900">
    </div>
    <div class="box">
        <form action="script.php" method="POST">
            <h1>Login de Usuário</h1> 
            <!-- Campos Email e Senha -->
            <input type="text" name="email" id="email" class="inputBox" placeholder="Email" required> 
            <br>
            <input type="password" name="senha" id="senha" class="inputBox" placeholder="Senha" required>
            <br><br>
            <div class="botoes">
                <!-- Botões Enviar e Voltar -->
                <input class="submit" type="submit" name="submit" id="submit" value="Enviar">
                <button class="submit" name="submit" id="submit"><a href="pagina_home.php">Voltar</a></button>
            </div>
        </form>
    </div>
</body>
<footer>
    <h2>INTELIGÊNCIAS ARTIFICIAIS</h2>
</footer>
</html>