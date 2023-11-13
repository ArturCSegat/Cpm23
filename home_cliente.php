<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .ola{
                border: none;
                color: white;
                margin-bottom: 4px;
                width: 60px;
                text-align: center;
                background-color: #E8640D;
                border-radius: 40px;
                border-top: 5px;
                border-bottom: 5px;
                margin-top: 5px;
            }
            label{

            }
            .container{
                width: 400px;
            }
            
        </style>
    </head>
    <body>
        <br>
        <h1>Pedir prato</h1>
        <div class="container">
            <form method="post">
                <label for="nome">Pesquise por nome</label>
                <input type="text" class="form-control">
                <label for="nome">Pesquise por ingredientes</label>
                <input type="text" class="form-control">
                <div>
                    <input type="submit" value="Buscar" class="ola d-grid">
                </div>

            </form>
        </div>
    </body>
</html>
