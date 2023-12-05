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
        <link rel="icon" type="image/x-icon" href="imgs/Cpm 23.png">
        <style>
            label{
                color:#C24600;
            }
            div{
                display: flex;
                justify-content: center;
                text-align: center;
                body{
                background-position-x: left;
              background-image: url(imgs/background.png);
            }
            }
        </style>
    </head>
    <body>
      
        <h1>Cadastrar prato</h1>
        <div>
        <form method="post" action="controller/cadastroPrato.php">
            <label for="nome do prato">Nome do prato</label>
            <input type = "text" id = "nomedoprato" name = "nome" class="form-control"><br><br>
            <label for="ingredientes">Ingredientes e informações gerais</label>
            <input type = "text" id = "ingredientes" name = "ingredientes" class="form-control"><br><br>
            <label for="preço">Preço</label>
            <input type="number" id="preco" name="preco" class="form-control"><br><br>

            <br> <label for="enviar">Enviar informações</label>
            <input type="submit" id="enviar" name="enviar">


        </form>
            </div>
    </body>
</html>
