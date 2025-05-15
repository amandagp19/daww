<?php
    include_once "../class/perfume.class.php";
    include_once "../class/perfumeDAO.class.php";
    $IdPerfume = $_GET["idperfume"];
    $objDAO = new perfumeDAO();
    $retorno = $objDAO->retornarUm($IdPerfume);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="ofertar_ok.php" method="post">
            <input type="hidden" name="idperfume" value="<?=$retorno["idPerfume"]?>"/>
            Qual percentual de oferta:
            <input type="text" name="oferta" value="<?=$retorno["oferta"]?>"/>
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>