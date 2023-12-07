<?php
   require_once("../db_model/pedidoModel.php");
   $id_prato = $_POST["id"];
   $id_coz = $_POST["id_coz"];
   $id_cliente = $_COOKIE["conta_id"];
   $p = new Pedido($id_cliente, $id_coz, $id_prato);
   $p->insert();
   header("location:../index.php");
?>
