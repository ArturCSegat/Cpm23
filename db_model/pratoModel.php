<?php
   require_once("conexaoMysql.php");
   class Prato {
      private int $id;
      public function __construct(
         public string $nome,
         public int $preco,
         public string $descricao,
         public int $dono_id,
      ) {}

      public function insert() {
         $db = new ConexaoMysql();
         $db->Conectar();

         $insert = 'INSERT INTO prato(nome, preco, descricao, cozinheiro_id) values(
            "'.$this->nome.'",
            '.$this->preco.',
            "'.$this->descricao.'",
            '. $this->dono_id.'
         );';

         try {
            $db->Executar($insert);
         } catch (Exception $e) {
            echo $e->getMessage();
            return;
         }
         $db->Desconectar();
         return $db->total;
      }


   }
?>
