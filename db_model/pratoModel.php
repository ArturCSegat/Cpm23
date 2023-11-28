<?php
require_once("conexaoMysql.php");
require_once("cozinheiroModel.php");
class Prato{
   private int $id;
   public string $nome;
   public int $preco;
   public string $descricao;
   public int $dono_id;
   public Cozinheiro $dono;
   public function __construct(
      string $nome,
      int $preco,
      string $descricao,
      int $dono_id
   ) {
      $this->nome = $nome;
      $this->preco = $preco;
      $this->descricao = $descricao;
      $this->dono_id = $dono_id;
   }

   public function insert(){
      $db = new ConexaoMysql();
      $db->Conectar();

      $insert = 'INSERT INTO prato(nome, preco, descricao, cozinheiro_id) values(
            "' . $this->nome . '",
            ' . $this->preco . ',
            "' . $this->descricao . '",
            ' . $this->dono_id . '
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

   public static function find(string $search_query){
      $search_query = "%" . $search_query . "%"; //  fodalisar a query
      $db = new ConexaoMysql();
      $db->Conectar();
      $str = 'SELECT * from prato WHERE nome like "' . $search_query . '" or (SELECT nome FROM cozinheiro where id like cozinheiro_id limit 1) like "' . $search_query . '" or descricao like "' . $search_query . '";';
      $return = $db->Consultar($str);

      $pratos = array();
      foreach ($return as $prato) {
         $str = 'SELECT * FROM cozinheiro where id = ' . $prato["cozinheiro_id"] . ' limit 1;';
         $co = $db->Consultar($str);
         $prato["cozinheiro"] = $co->fetch_assoc();
         array_push($pratos, $prato);
      }
      unset($prato);

     $db->Desconectar();

      if ($db->total < 1) {
         return null;
      }
      return $pratos;
   }
}
?>