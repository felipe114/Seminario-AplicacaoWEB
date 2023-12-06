<?php 
    /* Inserindo od dados do mysql */
    $BDhost = 'Localhost';
    $BDroot = 'root';
    $BDsenha = '';
    $BDnome = 'formulario_si';
    /* criando a variavel 'conexao' para conectar com o mysql */
    $conexao = new mysqli($BDhost, $BDroot, $BDsenha, $BDnome);
?>
