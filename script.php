<?php 
    session_start(); /* inicia a sessão */
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){/* se os campos email e senha não estiverem vazios, entra na condição if */
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        /* cadastro da página de login, que utiliza somente email e senha */
        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);
        $results = mysqli_query($conexao, "INSERT INTO cadastro(email, senha)
        VALUES ('$email', '$senha')");

        if(mysqli_num_rows($result) < 1){ /* se o email e senha não existirem no BD, redireciona para a página "não_existe.php" */
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: nao_existe.php');
        }
        else{ /* caso exista, ele acessa a conta do usuário normalmente, acessando a página pagina_principal.php */
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: pagina_principal.php');
        }
    }
    else{
        header('Location: login.php');
    }
?>