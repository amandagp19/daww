<?php
include_once "categoria.class.php";

class categoriaDAO
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar()
    {
        $sql = $this->conexao->prepare("SELECT * FROM Categoria");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(categoria $obj)
    {
        $sql = $this->conexao->prepare("INSERT INTO Categoria (nome, descricao)
                                        VALUES (:nome, :descricao)");
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":descricao", $obj->getDescricao());
        return $sql->execute();
    }

    public function excluir($id)
    {
        $sql = $this->conexao->prepare("DELETE FROM Categoria WHERE idCategoria = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id)
    {
        $sql = $this->conexao->prepare("SELECT * FROM Categoria WHERE idCategoria = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(categoria $obj)
    {
        $sql = $this->conexao->prepare("UPDATE Categoria SET nome = :nome, descricao = :descricao
                                        WHERE idCategoria = :idCategoria");
        $sql->bindValue(":idCategoria", $obj->getIdCategoria());
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":descricao", $obj->getDescricao());
        return $sql->execute();
    }
}
?>