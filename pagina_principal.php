<?php 
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){ /* se não existir as variáveis email e senha, redireciona para a página de login.php */
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal do Usuário</title>
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .box{
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            margin: 0;
            background: gray;
            color: white;
        }
        .box a{
            text-decoration: none;
            display: block;
            padding: 1em;
            color: white;
        }
        /*muda a cor do botão ao passar o mouse*/
        .box a:hover{
            background: red;
        }
        @media all and (max-width: 800px){
            .box{
                justify-content: space-between;
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
        .box2{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-evenly;
        }
        .imgBox2{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: end;
            padding: 40px;
        }
        .textoBox2{
            padding: 20px;
            width: 550px;
            text-align: justify;
        }
        .box3{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            text-align: justify;
            margin-top: 40px;
            position: relative;
        }
        .campo1{
            background: turquoise;
            color: white;
            width: 300px;
            text-align: center;
            padding: 10px;
            box-shadow: 0px 0px 8px 3px darkcyan;

        }
        .campo2{
            width: 300px;
            text-align: center;
            padding: 10px;
            border: 5px solid turquoise;
            box-shadow: 0px 0px 8px 3px darkcyan;
        }
        .campo3{
            width: 300px;
            background: turquoise;
            color: white;
            text-align: center;
            padding: 10px;
            box-shadow: 0px 0px 8px 3px darkcyan;
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
        .linha{
            background-color: rgb(12, 207, 233);
            color: rgb(12, 207, 233);
            padding: 2px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="box">
        <!-- email do usuário logado -->
        <?php 
            echo "<h3>$logado<h3>";
        ?>
        <li class="submit" name="submit" id="submit"><a href="sair.php">Sair</a></li> <!-- botão Sair, que finaliza a sessão -->
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
    <div class="box2">
        <div class="textoBox2">
            <h1>Os robôs podem nos substituir?</h1>
            <br><br>
            <p>
                Apesar das Inteligências Artificiais nos ajudarem no dia a dia, seja na realização de tarefas, no transporte ou na saúde, 
                uma IA apenas realiza funções pré-programadas em seu sistema. Isso quer dizer que uma Inteligência Artificial não realiza tarefas e comandos 
                por conta própria, mas sim o que foi programada para fazer. <br><br>
                Porém, não significa que as inteligências artificiais não sejam eficientes, muito pelo contrário, nas duas últimas décadas, 
                elas atingiram níveis antes inimagináveis. Muitas delas hoje, possuem sensores para monitorar o ambiente ao seu redor, e muitas são utilizadas 
                em veículos, máquinas industriais, e até para realizar o reconhecimento facial de uma pessoa.

            </p>
        </div>
        <div class="imgBox2">
            <img src="robo2.png" height="240" width="400">
            <br><br>
            <img src="robo3.jpg" height="240" width="400">
        </div>
    </div>
    <div class="box3">
        <div class="campo1">
            <h2>EDUCAÇÃO</h2>
            <p>
                Alunos podem ter acesso a ferramentas de aprendizado, realizando suas atividades diárias 
                de forma on-line, sendo por meio do site fornecido pela instituição de ensino, ou até mesmo por 
                aplicativos que possuem algoritmos que se adaptam às necessidades de cada aluno.
            </p>
        </div>
        <div class="campo2">
            <h2>TRANSPORTE</h2>
            <p>
                Carros que dirigem sozinhos serão cada vez mais comuns. Veículos com sistemas 
                avançados de assistência aos motoristas, com algoritmos implementados que monitoram o ambiente 
                ao redor do veículo em tempo real.
            </p>
        </div>
        <div class="campo3">
            <h2>SAÚDE</h2>
            <p>
                Hoje, os computadores utilizados
                na medicina, analisam um grande volume de dados, e 
                são capazes de propor soluções para problemas médicos.
                A criação de próteses ligadas ao cérebro do paciente, está para se tornar algo revolucionário 
                quando se trada de IA na saúde.
            </p>
        </div>
    </div>
</body>
<footer>
    <h2>INTELIGÊNCIAS ARTIFICIAIS</h2>
    <p>© Obrigado por utilizar este material, <br>volte sempre!</p>
</footer>
</html>