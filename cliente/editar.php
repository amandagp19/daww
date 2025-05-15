<?php
include_once "../class/cliente.class.php";
include_once "../class/clienteDAO.class.php";
$IdCliente = $_GET["idcliente"];
$objDAO = new clienteDAO();
$retorno = $objDAO->retornarUm($IdCliente);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="editar_ok.php" method="post">
        <input type="hidden" name="idCliente" value="<?= $retorno["idCliente"] ?>" />
        Nome:
        <input type="text" name="nome" value="<?= $retorno["nome"] ?>" />
        <br>
        <br>
        Cpf:
        <input type="text" name="cpf" value="<?= $retorno["cpf"] ?>" />
        <br>
        <br>
        Telefone:
        <input type="text" name="telefone" value="<?= $retorno["telefone"] ?>" />
        <br>
        <br>
        Email:
        <input type="email" name="email" value="<?= $retorno["email"] ?>" />
        <br>
        <br>
        Endereço:
        <input type="text" name="endereco" value="<?= $retorno["endereco"] ?>" />
        <br>
        <br>
        Login:
        <input type="text" name="login" value="<?= $retorno["login"] ?>" />
        <br>
        <br>
        Senha:
        <input type="password" name="senha" value="<?= $retorno["senha"] ?>" />
        <br>
        <br>
        <button type="submit" name="enviar">Enviar:</button>
</body>

</html>