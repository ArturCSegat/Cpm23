<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Olá</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <style>
            .bonito{
                display: flex;
                justify-content: space-evenly;
                flex-direction: row;
            }
            img{
                width: 300px;
            }
            h1,h2{
                  text-align: center;
            }
            body{
                background-image: url(imgs/comida.jpg);
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <h1>Seja bem vindo!</h1>
        <h2>Entrar como</h2>
        <div class="bonito">
        <a href="entrar_cliente.php" ><img src="imgs/Cliente.png"></a>
        <a href="entrar_cozinheiro.php"><img src="imgs/cozinheiro.png"></a>
        </div>
        <p>É novo aqui?</p>
        <a href="cadastrar_usuario.php?cod=01">Cadastre-se</a>
        <p>Quer ser um cozinheiro?</p>
        <a href="cadastrar_usuario.php?cod=02">Cadastre-se como cozinheiro</a>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
