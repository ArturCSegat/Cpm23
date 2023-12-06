<?php 
if ($_POST) {  
    require_once ("../db_model/pratoModel.php");
    $p = new Prato($_POST["nome"], $_POST["preco"], $_POST["ingredientes"], $_COOKIE["conta_id"]);
    $p->insert();
    header('location:../home_cozinheiro.php?cod=123');
}

?>