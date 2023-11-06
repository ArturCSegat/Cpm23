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

    </head>
    <body>
        <form method="post">
            <label for="nome do prato">Nome do prato</label>
            <input type = "text" id = "nomedoprato" name = "nomedoprato"><br><br>
            <label for="ingredientes">Ingredientes</label>
            <input type = "text" id = "ingredientes" name = "ingredientes"><br><br>
            <label for="preço">Preço</label>
            <input type="number" id="preco" name="preco"><br><br>
            <label for="mais informações">Mais informações</label>
            <input type="text" id="info" name="info">

            <label for="enviar">Enviar informações</label>
            <input type="submit" id="enviar" name="enviar">


        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
