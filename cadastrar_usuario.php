<html>
    <head>
        <title>Cadastrar Usuário</title>
    </head>
    <body>
        <?php
        @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '01') {
                            echo ('<h1>Cadastre-se</h1>
        <form method = "post">
        <label for = "nome">Nome completo</label><br>
        <input type = "text" id = "nome" name = "nome"><br>
        <label for = "email">Email</label><br>
        <input type = "email" id = "email" name = "email">
        <br><label for = "telefone">Telefone</label><br>
        <input type = "text" id = "telefone" name = "telefone"><br>
        <label for = "cpf">CPF</label><br>
        <input type = "text" id = "cpf" name = "cpf">
        <input type = "submit" id = "enviar" name = "enviar">
        </form>');
                        } else if ($cod == '02') {
                            echo ('<h1>Cadastre-se</h1>
        <form method = "post">
        <label for = "nome">Nome completo</label><br>
        <input type = "text" id = "nome" name = "nome"><br>
        <label for = "email">Email</label><br>
        <input type = "email" id = "email" name = "email">
        <br><label for = "telefone">Telefone</label><br>
        <input type = "text" id = "telefone" name = "telefone"><br>
        <label for = "cpf">CPF</label><br>
        <input type = "text" id = "cpf" name = "cpf">
        <input type = "submit" id = "enviar" name = "enviar">
        </form>');
                        }
                    }

        
        ?>

    </body>
</html>

