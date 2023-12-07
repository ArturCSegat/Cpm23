<?php
    $id = $_COOKIE["conta_id"];
    $tipo = $_COOKIE["tipo"];

    if ($tipo == "cliente") {
        header("location:home_cliente.php");
    } else if ($tipo == "cozinheiro") {
        header("location:home_cozinheiro.php");
    } else {
        header("location:home.php");
    }

?>
