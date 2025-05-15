<?php
include_once "../class/perfume.class.php";
include_once "../class/perfumeDAO.class.php";
include_once "../class/imagem.class.php";
include_once "../class/imagemDAO.class.php";

$obj = new perfume();
$obj->setNome($_POST["nome"]);
$obj->setIdCategoria($_POST["idCategoria"]);
$obj->setIdFragrancia($_POST["idFragrancia"]);
$obj->setIdMarca($_POST["idMarca"]);
$obj->setPreco($_POST["preco"]);
$obj->setVolumeMl($_POST["volume_ml"]);
$obj->setOfertar($_POST["oferta"]);
$obj->setEstoque($_POST["estoque"]);

$objDAO = new perfumeDAO();
$retorno = $objDAO->inserir($obj);

$obj = new imagem();
$obj->setIdPerfume($retorno);
$objDAO = new imagemDAO();

for($i = 0; $i < count($_FILES["imagem"]["name"]); $i++) {
    $caminho = $_FILES["imagem"]["name"][$i];
    $caminhoTmp = $_FILES["imagem"]["tmp_name"][$i];
    $diretorio = "../imagem/" . $caminho;

    if(move_uploaded_file($caminhoTmp, $diretorio)) {
        $obj->setCaminho($caminho);
        $objDAO->inserir($obj);
    }
}

if($retorno)
    echo "Adicionado com sucesso";
else
    echo "Erro! Por favor, consulte um adm";
?>
