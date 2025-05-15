<?php
include_once "../class/cliente.class.php";
include_once "../class/clienteDAO.class.php";

$objclienteDAO = new clienteDAO();
$retorno = $objclienteDAO->listar();

if (isset($_POST["editarOk"]))
    echo "<h2>Editado com sucesso!</h2>";
if (isset($_POST["editarErro"]))
    echo "<h2>Erro ao editar!</h2>";
echo "<a href='inserir.php'>Inserir</a><br /><br />";
foreach ($retorno as $linha) {
    echo "Nome: " . $linha["nome"];
    echo "<br />Email: " . $linha["email"];
    echo "<br />
<a href='editar.php?idcliente=" . $linha["idCliente"] . "'>
Editar</a>
<a href='excluir.php?idcliente=" . $linha["idCliente"] . "'>
Excluir</a>
<br /><br />";
}
?>