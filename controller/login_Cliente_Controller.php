<?php

require_once("../db_model");

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $c = new Cliente(email: $email, senha: $senha);
    if ($c->validar()) {
        session_start();
        $_SESSION['login'] = $email;
        
        header('location:../home_cliente.php');
    } else {
        //Login inválido 
        header('location:../entrar_cliente.php?cod=171');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}
?>
