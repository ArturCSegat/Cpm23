<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar prato</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style>
            label{
                color:#C24600;
            }
            div{
                display: flex;
                justify-content: center;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Visualizar pedidos disponíveis</h1>
        <h1>Cadastrar prato</h1>
        <div>
        <form method="post">
            <label for="nome do prato">Nome do prato</label>
            <input type = "text" id = "nomedoprato" name = "nomedoprato" class="form-control"><br><br>
            <label for="ingredientes">Ingredientes</label>
            <input type = "text" id = "ingredientes" name = "ingredientes" class="form-control"><br><br>
            <label for="preço">Preço</label>
            <input type="number" id="preco" name="preco" class="form-control"><br><br>
            <label for="mais informações">Mais informações</label>
            <input type="text" id="info " class="form-control"name="info">

            <br> <label for="enviar">Enviar informações</label>
            <input type="submit" id="enviar" name="enviar">


        </form>
            </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
