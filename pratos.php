<html>
    <head>
        <title>Prato</title>
        <link rel="stylesheet" href="css/geral.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    </head>
    <style>
        body{
            background-image: url(imgs/background.png);
        }
        td, th {
           font-size: 20px;
            padding: .7em;
            margin: 0;
           
            text-align: center;
        }
 
        td{
            color: black;

        }

        table{
            width: 100%;
            margin-bottom : .5em;
            table-layout: fixed;
            text-align: center;
        }
        
    </style>
    <body>
    </body>
</html>

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
        echo '<div class="tabela">
                    <table>
                    <tr>
                    <th>Nome do prato</th>
                    <th>Descrição/ingredientes</th>
                    <th>Preço</th>
                    <th>Nome do cozinheiro</th>
                    <th>Categoria</th>
                    </tr>';
        foreach ($pratos as $prato) {
            echo (
            '
                 
                    <tr>
                       <form method="POST" action="controller/pedirController.php">
                          <input style="display: none;" name="id" value='.$prato["id"].'>
                          <input style="display: none;" name="id_coz" value='.$prato["cozinheiro"]["id"].'>
                          <td>' . $prato["nome"] . '</td>
                          <td>' . $prato["descricao"] . '</td>
                          <td>R$ ' . $prato["preco"] . '</td>
                          <td>' . $prato["cozinheiro"]["nome"] . '</td>
                          <td>' . $prato["cozinheiro"]["categoria"] . '</td>
                          <td><button type="submit">Pedir</button></td>
                       </form>
                     </tr>
                     
                  '
            );
        }
        echo '</div> </table>';
    }
}
?>
