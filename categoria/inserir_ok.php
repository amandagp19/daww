<?php
//echo "<pre>";
//print_r($_POST);
include_once "../class/categoria.class.php";
include_once "../class/categoriaDAO.class.php";

$obj = new categoria();
$obj->setNome($_POST["nome"]);
$obj->setDescricao($_POST["cpf"]);
$objDAO = new categoriaDAO();
$retorno = $objDAO->inserir($obj);
if ($retorno)
    echo "Adicionado com sucesso";
else
    echo "Erro!Por favor,consulte um adm";
?>