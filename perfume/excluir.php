<?php
include_once "../class/perfume.class.php";
include_once "../class/perfumeDAO.class.php";
$idPerfume = $_GET["idperfume"];
$objDAO = new perfumeDAO();
$retorno = $objDAO->excluir($idPerfume);
if ($retorno)
    echo "Excluido com sucesso";
else
    echo "Erro!";
?>