<?php
   require_once("../db_model/pedidoModel.php");
   Pedido::deleteId($_POST["id"]);
   header("location:../index.php");
?>
