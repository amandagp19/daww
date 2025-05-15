<?php
include_once "fragrancia.class.php";

class fragranciaDAO
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar()
    {
        $sql = $this->conexao->prepare("SELECT * FROM Fragrancia");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(fragrancia $obj)
    {
        $sql = $this->conexao->prepare("INSERT INTO Fragrancia (tipo, intensidade, origem)
                                        VALUES (:tipo, :intensidade, :origem)");
        $sql->bindValue(":tipo", $obj->getTipo());
        $sql->bindValue(":intensidade", $obj->getIntensidade());
        $sql->bindValue(":origem", $obj->getOrigem());
        return $sql->execute();
    }

    public function excluir($id)
    {
        $sql = $this->conexao->prepare("DELETE FROM Fragrancia WHERE idFragrancia = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id)
    {
        $sql = $this->conexao->prepare("SELECT * FROM Fragrancia WHERE idFragrancia = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(fragrancia $obj)
    {
        $sql = $this->conexao->prepare("UPDATE Fragrancia SET tipo = :tipo, intensidade = :intensidade, origem = :origem
                                        WHERE idFragrancia = :idFragrancia");
        $sql->bindValue(":idFragrancia", $obj->getIdFragrancia());
        $sql->bindValue(":tipo", $obj->getTipo());
        $sql->bindValue(":intensidade", $obj->getIntensidade());
        $sql->bindValue(":origem", $obj->getOrigem());
        return $sql->execute();
    }
}
?>