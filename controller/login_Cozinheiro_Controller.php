<?php


   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   //Se vier qualquer coisa via get
   if ($_POST) {
      require_once("../db_model/cozinheiroModel.php");

   
      echo "cara";

      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $c = new Cozinheiro($email, $senha);
      if ($c->validar()) {
         echo "cara";
         //Login OK
         //header('location:../index.php?email='.$email.'&&senha='.$senha);
         //echo ('Usuário logado com sucesso.');

        setcookie('conta_id', $c->id, time()+10000000,'/');
         header('location:../home_cozinheiro.php');
      } else {
         //Login inválido 
         header('location:../index.php?cod=171');
      }
   } else {
      //redireciona para a index
      header('location:../index.php');
   }
?>
