<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="icon" type="image/x-icon" href="imgs/Cpm 23.png">
        <style>
            .bonito{
                margin-top: 150px;
                width: 400px;
                
            }
            .ola{
                border: none;
                color: white;
                margin-bottom: 4px;
                width: 300px;
               text-align: center;
               background-color: #E8640D;
            }
            body{
                background-position-x: left;
              background-image: url(imgs/background.png);
            }
            a{
                
                background: none;
            }
        </style>
    </head>
    <body>
        <a href="home.php"><img src="imgs/logo.png" width="70px"></a>
        <form  method="post" action="controller/login_Cozinheiro_Controller.php">   
            <div class="container bonito" >
                <div>
                    <h1 class="aa">Entrar</h1><br>
                    <label for="email" class="aa">Email:</label>
                    <?php
                    if (isset($_COOKIE['email'])) {
                        echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email"
                            value="' . $_COOKIE['email'] . '" required="">');
                    } else {
                        echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" required="">');
                    }
                    ?>
                </div>
                <div class="mb-3 mt-3">
                    <label for="senha"class="aa">Senha:</label>
                    <input type="password" class="form-control" id="senha" 
                           placeholder="Senha" name="senha" required="">
                </div>
                <div class="d-grid" style="display:flex; justify-content: center;">
                    <input type="submit" value="Entrar"
                           class="ola" >
                </div>
                <div class="d-grid">

                    <?php
                    //capturavam a variável query string "cod"
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo ('<br><div class="alert alert-danger">');
                            echo ('Verifique usuário ou senha.');
                            echo ('</div>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="alert alert-warning">');
                            echo ('Sua sessão expirou. Realize o login novamente.');
                            echo ('</div>');
                        }
                    }
                    ?>
                </div>

            </div>
        </form>
    </body>
</html>
