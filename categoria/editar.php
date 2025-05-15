<?php
include_once "../class/categoria.class.php";
include_once "../class/categoriaDAO.class.php";
$IdCategoria = $_GET["idcategoria"];
$objDAO = new categoriaDAO();
$retorno = $objDAO->retornarUm($IdCategoria);
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
        <input type="hidden" name="idCategoria" value="<?= $retorno["idCategoria"] ?>" />
        Nome:
        <input type="text" name="nome" value="<?= $retorno["nome"] ?>" />
        <br>
        <br>
        Descricao:
        <input type="number" name="descricao" value="<?= $retorno["descricao"] ?>" />
        <br>
        <br>
        <button type="submit" name="enviar">Enviar:</button>
</body>

</html>