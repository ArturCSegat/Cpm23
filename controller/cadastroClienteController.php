<?php
if ($_POST) {
    require_once("../db_model/clienteModel.php");
    // <input type = "text" id = "nome" name = "nome"><br>
    // <input type = "email" id = "email" name = "email">
    // <input type = "password" id = "senha" name = "senha">
    // <input type = "text" id = "telefone" name = "telefone"><br>
    // <input type = "text" id = "cpf" name = "cpf">
    // <input type = "text" id = "endereco" name = "endereco">
    // <input type = "submit" id = "enviar" name = "enviar">
    $c = new Cliente($_POST["email"], $_POST["senha"], $_POST["nome"],  $_POST["endereco"]);
    $c->inserir();
}
?>