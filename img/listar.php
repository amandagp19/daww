<?php
include_once "../class/imagem.class.php";
include_once "../class/imagemDAO.class.php";

$objimagemDAO = new imagemDAO();
$retorno = $objimagemDAO->listar();

if (isset($_POST["editarOk"]))
    echo "<h2>Editado com sucesso!</h2>";
if (isset($_POST["editarErro"]))
    echo "<h2>Erro ao editar!</h2>";
echo "<a href='inserir.php'>Inserir</a><br /><br />";
foreach ($retorno as $linha) {
    echo "caminho: " . $linha["caminho"];
    echo "<br />descricao: " . $linha["descricao"];
    echo "<br />
<a href='editar.php?idcategoria=" . $linha["idCategoria"] . "'>
Editar</a>
<a href='excluir.php?idcategoria=" . $linha["idCategoria"] . "'>
Excluir</a>
<br /><br />";
}
?>