<html>
    <head>
        <title>Cadastrar Usuário</title>
    </head>
    <link rel="stylesheet" href="css/geral.css"/>

    <body>
        <?php
        @$cod = $_REQUEST['cod'];
        if (isset($cod)) {
            if ($cod == '01') {
                echo ('<h1>Cadastre-se</h1>
        <form method = "post" action="controller/cadastroClienteController.php">
        <label for = "nome">Nome completo</label><br>
        <input type = "text" id = "nome" name = "nome"><br>
        <label for = "email">Email</label><br>
        <input type = "email" id = "email" name = "email">
        <label for = "senha">Senha</label><br>
        <input type = "password" id = "senha" name = "senha">
        <br><label for = "telefone">Telefone</label><br>
        <input type = "text" id = "telefone" name = "telefone"><br>
        <label for = "cpf">CPF</label><br>
        <input type = "text" id = "cpf" name = "cpf">
        <label for = "enderco">Endereço</label><br>
        <input type = "text" id = "endereco" name = "endereco">
        <input type = "submit" id = "enviar" name = "enviar">
        </form>');
            } else if ($cod == '02') {
                echo ('<h1>Cadastre-se</h1>
        <form method = "post" action="controller/cadastroCozinheiroController.php">
        <label for = "nome">Nome completo</label><br>
        <input type = "text" id = "nome" name = "nome"><br>
        <label for = "email">Email</label><br>
        <input type = "email" id = "email" name = "email">
        <label for = "senha">Senha</label><br>
        <input type = "password" id = "senha" name = "senha">
        <br><label for = "telefone">Telefone</label><br>
        <input type = "text" id = "telefone" name = "telefone"><br>
        <label for = "cpf">CPF</label><br>
        <input type = "text" id = "cpf" name = "cpf">
        <label for = "enderco">Endereço</label><br>
        <input type = "text" id = "endereco" name = "endereco">
        <label for = "categoria">Categoria</label><br>
        <input type = "text" id = "categoria" name = "categoria">
        <label for = "faixa-preco">Faixa de Preço</label><br>
        <input type = "number" id = "faixa-preco" name = "faixa-preco">
        <input type = "submit" id = "enviar" name = "enviar">
        </form>');
            }
        }
        ?>

    </body>
</html>

