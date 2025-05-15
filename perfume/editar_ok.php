<?php
//echo "<pre>";
//print_r($_POST);
include_once "../class/perfume.class.php";
include_once "../class/perfumeDAO.class.php";

$obj = new perfume();
$obj->setIdPerfume($_POST["idperfume"]);
$obj->setNome($_POST["nome"]);
$obj->setIdFragrancia($_POST["idFragrancia"]);
$obj->setIdMarca($_POST["idMarca"]);
$obj->setPreco($_POST["preco"]);
$obj->setVolumeMl($_POST["volumeMl"]);
$obj->setOfertar($_POST["ofertar"]);
$obj->setEstoque($_POST["estoque"]);
$objDAO = new perfumeDAO();
$retorno = $objDAO->editar( $obj);
if ($retorno)
    header("location:listar.php?editarOk");
else
    header("location:listar.php?editarErro");
?>