<?php
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        /* realizando o endereçamento de cada campo com o Banco de Dados, usando a variável $conexao do arquivo conexao.php, para realizar o registro de usuário */
        
        $quant_senha = strlen($senha);
        if(str_contains($email, '@') && $quant_senha >= 8){ /* se for um email válido e uma senha de no mínimo 6 caracteres, o novo usuário é cadastrado */
            $results = mysqli_query($conexao, "INSERT INTO cadastro(nome, sobrenome, email, senha, celular, sexo, data_nasc)
            VALUES ('$nome', '$sobrenome', '$email', '$senha', '$celular', '$sexo', '$data_nasc')");
            
            header('Location: login.php');/* e vai para a tela de login */
        }
        else{
            echo "<h1>Email e/ou senha inválidos!</h1>"; /* caso contrário, a página "não existe" é mostrada */
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
        font-family: Arial;
        background: linear-gradient(to right, rgb(211,211,211), rgb(128,128,128));
        text-align: center;
        color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-10%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 15px;
        }
        .insert{
            text-align: left;
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
        label{
            display: inline-block;
            width: 90px;
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
        <img src="robo_form.jpg" height="700" width="900">
    </div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <br>
            <fieldset>
                <!-- titulo do formulario -->
                <legend><b>CADASTRO DE CLIENTE</b></legend>
                <br>
                <br>
                <div class="insert"> <!-- div para o campo 'Nome' -->  
                    <label for="nome" class="insert_label">Nome:</label>
                    <input type="text" name="nome" id="nome" class="inputBox" required>
                </div>
                <br>
                <div class="insert"> <!-- div para o campo 'Sobrenome' -->
                    <label for="sobrenome" class="insert_label">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" class="inputBox" required>
                </div>
                <br>
                <div class="insert"> <!-- div para o campo 'Email' -->
                    <label for="email" class="insert_label">Email:</label>
                    <input type="text" name="email" id="email" class="inputBox" required>
                </div>
                <br>
                <div class="insert"> <!-- div para o campo 'Senha' -->
                    <label for="senha" class="insert_label">Senha:</label>
                    <input type="password" name="senha" id="senha" class="inputBox" required>
                </div>
                <br>
                <div class="insert"><!-- div para o campo 'Celular' -->
                    <label for="celular" class="insert_label">Celular:</label>
                    <input type="text" name="celular" id="celular" class="inputBox" required>
                </div>
                <br>
                <div class="insert"> <!-- div para o campo 'Sexo', que será do tipo 'select' -->
                    <label for="sexo" class="insert_label">Sexo:</label>
                    <select id="sexo" name="sexo" required>
                    <option id="sexo" name="sexo" selected disabled value="">Selecione</option>
                    <option id="sexo" name="sexo">Masculino</option>
                    <option id="sexo" name="sexo">Feminino</option>
                    <option id="sexo" name="sexo">Outro</option>
                    </select>
                </div>
                <br>
                <div class="insert"> <!-- div para o campo 'Data de Nascimento' -->
                    <label for="data_nasc" class="insert_label">Data de Nascimento: </label>
                    <input type="date" name="data_nasc" id="data_nasc" class="inputBox" required>
                </div>
                <br><br>
                <!-- botão para realizar o cadastro -->
                <input type="submit" name="submit" id="submit" value="Cadastrar" class="submit">
                <!-- botão para voltar à página inicial -->
                <button class="submit" id="submit" name="submit"><a href="pagina_home.php">Voltar</a></button>
            </fieldset>
        </form>
    </div>
</body>
<footer>
    <h2>INTELIGÊNCIAS ARTIFICIAIS</h2>
</footer>
</html>
