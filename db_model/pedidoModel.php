<?php 
   require_once("conexaoMysql.php");
   class Pedido {
      public int $id;
      public int $cliente;
      public int $cozinheiro;
      public int $prato;

      public function __construct(
         int $cliente,
         int $cozinheiro,
         int $prato
      ){
         $this->cliente = $cliente;
         $this->cozinheiro = $cozinheiro;
         $this->prato = $prato;
      }

      public function insert(){
         $db = new ConexaoMysql();
         $db->Conectar();

         $insert = 'INSERT INTO pedido(cozinheiro_id, cliente_id, prato_id, confirmado) values(
            "' . $this->cozinheiro. '",
            ' . $this->cliente. ',
            "' . $this->prato . '",
            0
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

      public static function allFor(int $coz_id){
         $db = new ConexaoMysql();
         $db->Conectar();
         $str = '
            SELECT pedido.id as id, prato.nome as prato_nome, prato.preco, cliente.nome as cliente_nome, cliente.endereco, cozinheiro.nome as cozinheiro_nome, confirmado
            FROM pedido
            JOIN cliente on cliente.id = pedido.cliente_id
            JOIN prato on prato.id = pedido.prato_id
            JOIN cozinheiro on cozinheiro.id = pedido.cozinheiro_id
            WHERE pedido.cozinheiro_id = '.$coz_id.' or pedido.cliente_id = '.$coz_id.';
         ';

         $return = $db->Consultar($str);

         $db->Desconectar();

         if ($db->total < 1) {
            return null;
         }
         return $return;
      }

      public static function confirmId(int $id) {
         $db = new ConexaoMysql();
         $db->Conectar();

         $str = '
            UPDATE pedido
            set confirmado = 1
            WHERE id = '.$id.'.;
         ';

         try {
            $db->Executar($str);
         } catch (Exception $e) {
            echo $e->getMessage();
            return;
         }
         $db->Desconectar();
         return $db->total;
      }

      public static function deleteId(int $id) {
         $db = new ConexaoMysql();
         $db->Conectar();

         $str = '
            DELETE FROM pedido
            WHERE pedido.id = '.$id.';
         ';

         try {
            $db->Executar($str);
         } catch (Exception $e) {
            echo $e->getMessage();
            return;
         }
         $db->Desconectar();
         return $db->total;
      }
}
?>
