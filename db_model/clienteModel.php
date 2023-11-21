<?php

   require_once("conexaoMysql.php");

   class Cliente {
      public int $id;
      private string $email;
      private string $senha;
      public string $nome = "";
      public string $endereco = "";

      public function __construct(
         string $email,
         string $senha,
         string $nome = "",
         string $endereco = ""
      ){
         $this->email = $email;
         $this->senha = $senha;
         $this->nome = $nome;
         $this->endereco = $endereco;
      }

      public function validar() {
         $db = new ConexaoMysql();
         $db->Conectar();

         $sql = 'SELECT * FROM cliente WHERE email = "'.$this->email.'" and senha = "'.$this->senha.'";';
         $cliente = $db->Consultar($sql)->fetch_assoc();

         $db->Desconectar();
         if ($db->total == 1) {
            $this->id = $cliente['id'];
            $this->nome = $cliente['nome'];
            $this->endereco = $cliente['endereco'];
            return true;
         }
         return false;
      }

      public function inserir() {
         $db = new ConexaoMysql();
         $db->Conectar();

         $query = 'INSERT INTO cliente(nome, email, senha, endereco)
         value(
            "'.$this->nome.'",
            "'.$this->email.'",
            "'.$this->senha.'",
            "'.$this->endereco.'");';
            try {
               $db->Executar($query);
            } catch (Exception $e) {
               echo $e->getMessage();
               return;
            }
            $db->Desconectar();
            return $db->total;
         }
      }
   ?>
