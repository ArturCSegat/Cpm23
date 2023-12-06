<html>
    <head>
        <title>Página do cozinheiro</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="icon" type="image/x-icon" href="imgs/Cpm 23.png">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');

            h1,p,h2,td,tr,label{
                color: #C24600;
                font-family: 'Oswald', sans-serif;


            }
            a{
                font-family: 'Oswald', sans-serif;
                background: #f78243;
                color: black;
                text-decoration: none;
            }
            h1{
                text-align: center;
            }
            .bonito{
                font-size: 20px;
                display: flex;
                justify-content: center;
                width: 400px;
            }
            body{
                background-position-x: left;
                background-image: url(imgs/background.png);
                text-align: center;
            }
            .btn{
                background-color: #C24600;
                color: white;
            }
            a{
                
                background: none;
            }
            div{
                display: flex;
                margin-top: 30px;
                margin-left: 30px;
            }
        </style>
    </head>
    <body>
        <div>
          <a class="btn btn-danger" href="controller/logoutController.php">Sair</a>
        </div>
        <h1>Cadastrar prato</h1>
            <div class="container bonito">
                <form method="post" action="controller/cadastroPrato.php">
                    <label for="nome do prato">Nome do prato</label>
                    <input type = "text" id = "nomedoprato" name = "nome" class="form-control"><br>
                    <label for="ingredientes">Ingredientes e informações gerais</label>
                    <input type = "text" id = "ingredientes" name = "ingredientes" class="form-control"><br>
                    <label for="preço">Preço</label>
                    <input type="number" id="preco" name="preco" class="form-control"><br>

                    <br> <label for="enviar">Enviar informações</label>
                    <input class="btn" type="submit" id="enviar" name="enviar">
                    
                </form>
                
            </div>
        <?php
                    //capturavam a variável query string "cod"
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '123') {
                            echo ('<br><div class="alert alert-sucess">');
                            echo ('Cadastro concluido com sucesso');
                            echo ('</div>');
                        } 
                    }
                    ?>
    </body>

</html>
