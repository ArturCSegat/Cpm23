<?php
   require_once("conexaoMysql.php");
   class Prato {
      private int $id;
      public string $nome;
      public int $preco;
      public string $descricao;
      public int $dono_id;
      public function __construct(
         string $nome,
         int $preco,
         string $descricao,
         int $dono_id
      ){
         $this->nome = $nome;
         $this->preco = $preco;
         $this->descricao = $descricao;
         $this->dono_id = $dono_id;
      }

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

      public static function find(string $query) {
         $query = "%".$query."%"; //  fodalisar a query
         $db = new ConexaoMysql();
         $db->Conectar();
         $str = 'SELECT * from prato WHERE nome like "'.$query.'" or (SELECT nome FROM cozinheiro where id like cozinheiro_id limit 1) like "'.$query.'" or descricao like "'.$query.'";';
         $return = $db->Consultar($str);
         $db->Desconectar();

         if ($db->total < 1) {
            return null; 
         }
         return $return;
      }


   }
?>
