<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: 'Open Sans',sans-serif;
            background: lightgray;
        }
        .box{
            display: flex;
            flex-flow: row wrap;
            justify-content: flex-end;
            list-style: none;
            margin: 0;
            background: gray;
        }
        .box a{
            text-decoration: none;
            display: block;
            padding: 1em;
            color: white;
        }
        .box a:hover{
            background: dimgray;
        }
        @media all and (max-width: 800px){
            .box{
                justify-content: space-around;
            }
        }
        @media all and (max-width: 600px){
            .box{
                flex-flow: column wrap;
                padding: 0;
            }
            .box a{
                text-align: center;
                padding: 10px;
                border-top: 1px solid rgba(255, 255, 255, 0.3);
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }
            .box li last-of-type a{
                border-bottom: none;
            }
        }
        .box1{
            background: lightgray;
            display: flex;
            padding: 50px;
            flex-direction: row;
            flex-wrap: nowrap;
            flex-flow: row wrap;
            justify-content: space-evenly;
        }
        .textoBox1 {
            color: dimgray;
            padding: 20px;
            font-size: 25px;
            width: 300px;
            border: 5px solid seashell;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        .linha{
            background-color: rgb(12, 207, 233);
            color: rgb(12, 207, 233);
            padding: 1px;
            margin-top: 15px;
        }
        footer{
            display: flex;
            flex-direction: column;
            color: rgb(96, 93, 99);
            background: rgb(13, 12, 14);
            height: 400px;
            margin-top: 50px;
            text-align: center;
            align-content: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="box"><!-- botões "Entrar" e "Criar Conta" -->
        <li class="submit" name="submit" id="submit"><a href="login.php">Entrar</a></li><!-- redireciona para a página de login -->
        <li class="submit" name="submit" id="submit"><a href="formulario.php">Criar Conta</a></li><!-- redireciona para a página de cadastro -->
    </div>
    <div class="box1">
        <div class="imgBox1">
            <img src="robo.jpg" width="700" height="400">
        </div>
        <div class="textoBox1">
            <h1>O Futuro da IA no Planeta</h1>
            <h3>A cada ano, a tecnologia alcança níveis que antes eram inimagináveis.</h3>
        </div>
    </div>
    <div class="linha"><p>|</p></div>
</body>
<footer>
    <h2>INTELIGÊNCIAS ARTIFICIAIS</h2>
    <p>© Para receber notificações e ter acesso a novas publicações, <br>entre no site ou cadastre-se.</p>
</footer>
</html>