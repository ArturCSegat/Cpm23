<?php

require_once("../db_model/clienteModel.php");

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $c = new Cliente($email, $senha);
    if ($c->validar()) {
        setcookie('conta_id', $c->id, time()+10000000,'/');
        setcookie('tipo', 'cliente', time()+10000000,'/');
        
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
