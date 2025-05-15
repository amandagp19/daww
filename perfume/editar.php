<?php
include_once "../class/perfume.class.php";
include_once "../class/perfumeDAO.class.php";
$idperfume = $_GET["idperfume"];
$objDAO = new perfumeDAO();
$retorno = $objDAO->retornarUm($idperfume);
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
        <input type="hidden" name="idPerfume" value="<?= $retorno["idPerfume"] ?>" />
        Nome:
        <input type="text" name="nome" value="<?= $retorno["nome"] ?>" />
        <br>
        <br>
        idCategoria:
        <input type="number" name="idCategoria" value="<?= $retorno["idCategoria"] ?>" />
        <br>
        <br>
        idFragrancia:
        <input type="number" name="idFragrancia" value="<?= $retorno["idFragrancia"] ?>" />
        <br>
        <br>
        idMarca
        <input type="number" name="idMarca" value="<?= $retorno["idMarca"] ?>" />
        <br>
        <br>
        Preço:
        <input type="text" name="preco" value="<?= $retorno["preco"] ?>" />
        <br>
        <br>
        VolumeMl:
        <input type="text" name="volumeMl" value="<?= $retorno["volumeMl"] ?>" />
        <br>
        <br>
        Estoque:
        <input type="number" name="estoque" value="<?= $retorno["estoque"] ?>" />
        <br>
        <br>
        <button type="submit" name="enviar">Enviar:</button>
</body>

</html>