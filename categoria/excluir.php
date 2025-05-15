<?php
include_once "../class/categoria.class.php";
include_once "../class/categoriaDAO.class.php";
$IdCategoria = $_GET["idcategoria"];
$objDAO = new categoriaDAO();
$retorno = $objDAO->excluir($IdCategoria);
if ($retorno)
    echo "Excluido com sucesso";
else
    echo "Erro!";
?>