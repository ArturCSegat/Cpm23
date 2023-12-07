<?php
   unset($_COOKIE['tipo']);
   setcookie('tipo', '', time() - 3600, '/');

   unset($_COOKIE['conta_id']);
   setcookie('conta_id', '', time() - 3600, '/');

   header('location:../index.php');
?>
