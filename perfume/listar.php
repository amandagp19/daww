<?php
include_once "../class/perfume.class.php";
include_once "../class/perfumeDAO.class.php";

include_once "../class/imagem.class.php";
include_once "../class/imagemDAO.class.php";

$objPerfumeDAO = new perfumeDAO();
$listaPerfumes = $objPerfumeDAO->listar();

/*
echo "<pre>";
print_r($listaPerfumes);
*/
if (isset($_POST["editarOk"]))
    echo "<h2>Editado com sucesso!</h2>";
if (isset($_POST["editarErro"]))
    echo "<h2>Erro ao editar!</h2>";

echo "<a href='inserir.php'>Inserir </a><br>";
$objImgDAO = new imagemDAO();

foreach ($listaPerfumes as $linha) {
    $idperfume = $linha["idPerfume"];
    $imagem = $objImgDAO->retornarUm($idperfume);

    echo "<br/> Nome: " . $linha["nome"];

    if ($imagem && isset($imagem['caminho'])) {
        echo "<img src='../imagem/" . $imagem['caminho'] . "' 
        alt='Imagem do perfume' style='width:100px; height:auto; display:block; margin:auto;' />";

    } else {
        echo "<br/>Imagem não encontrada.";
    }

    echo "<br/>
        <a href='editar.php?idperfume=" . $linha["idPerfume"] . "'>Editar</a>
        <a href='excluir.php?idperfume=" . $linha["idPerfume"] . "'>Excluir</a>
        <a href='ofertar.php?idperfume=" . $linha["idPerfume"] . "'>Oferta</a>
        <br/><br/>";
}
?>