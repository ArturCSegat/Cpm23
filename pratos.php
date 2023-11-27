<?php 
   if ($_POST) {
      $query = "";

      if ($_POST["ingrediente"] != "") {
         $query = $_POST["ingrediente"];
      }
      if ($_POST["nome-cozinheiro"] != "") {
         $query = $_POST["nome-cozinheiro"];
      }
      if ($_POST["nome-prato"] != "") {
         $query = $_POST["nome-prato"];
      }
      

      require_once("db_model/pratoModel.php");

      $pratos = Prato::find($query);

      if ($pratos != null) {
         echo '<div style="display: flex; flex-direction: row;"/>';
            foreach ($pratos as $prato) {
               echo (
                  '
                  <div style="display: flex; flex-direction: column; margin: 5%;">
                     <p>' . $prato["nome"] . '</p>
                     <p>' . $prato["descricao"] . '</p>
                     <p>' . $prato["preco"] . '</p>
                  </div>
                  '
               );
            }
            echo "</div>";
      }
   }

?>
