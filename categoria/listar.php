<?php
include_once "../class/categoria.class.php";
include_once "../class/categoriaDAO.class.php";

$objcategoriaDAO = new categoriaDAO();
$retorno = $objcategoriaDAO->listar();

if (isset($_POST["editarOk"]))
    echo "<h2>Editado com sucesso!</h2>";
if (isset($_POST["editarErro"]))
    echo "<h2>Erro ao editar!</h2>";
echo "<a href='inserir.php'>Inserir</a><br /><br />";
foreach ($retorno as $linha) {
    echo "Nome: " . $linha["nome"];
    echo "<br />descricao: " . $linha["descricao"];
    echo "<br />
<a href='editar.php?idcategoria=" . $linha["idCategoria"] . "'>
Editar</a>
<a href='excluir.php?idcategoria=" . $linha["idCategoria"] . "'>
Excluir</a>
<br /><br />";
}
?>