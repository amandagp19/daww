<?php
//echo "<pre>";
//print_r($_POST);
include_once "../class/categoria.class.php";
include_once "../class/categoriaDAO.class.php";

$obj = new categoria();
$obj->setIdCategoria($_POST["idCategoria"]);
$obj->setNome($_POST["nome"]);
$obj->setDescricao($_POST["descricao"]);
$objDAO = new categoriaDAO();
$retorno = $objDAO->editar($obj);
if ($retorno)
    header("location:listar.php?editarOk");
else
    header("location:listar.php?editarErro");
?>