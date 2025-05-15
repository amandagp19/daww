<?php
//echo "<pre>";
//print_r($_POST);
include_once "../class/cliente.class.php";
include_once "../class/clienteDAO.class.php";

$obj = new cliente();
$obj->setIdCliente($_POST["idCliente"]);
$obj->setNome($_POST["nome"]);
$obj->setCpf($_POST["cpf"]);
$obj->setTelefone($_POST["telefone"]);
$obj->setEmail($_POST["email"]);
$obj->setEndereco($_POST["endereco"]);
$obj->setLogin($_POST["login"]);
$obj->setSenha($_POST["senha"]);
$objDAO = new clienteDAO();
$retorno = $objDAO->editar($obj);
if ($retorno)
    header("location:listar.php?editarOk");
else
    header("location:listar.php?editarErro");
?>