<?php
include_once "../class/cliente.class.php";
include_once "../class/clienteDAO.class.php";
$IdCliente = $_GET["idcliente"];
$objDAO = new clienteDAO();
$retorno = $objDAO->excluir($IdCliente);
if ($retorno)
    echo "Excluido com sucesso";
else
    echo "Erro!";
?>