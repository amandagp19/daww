<?php
include_once "marca.class.php";

class marcaDAO {
    private $conexao;
    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar() {
        $sql = $this->conexao->prepare("SELECT * FROM Marca");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(marca $obj) {
        $sql = $this->conexao->prepare("INSERT INTO Marca (nome, pais_origem, ano_fundacao)
                                        VALUES (:nome, :pais_origem, :ano_fundacao)");
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":pais_origem", $obj->getPaisOrigem());
        $sql->bindValue(":ano_fundacao", $obj->getAnoFundacao());
        return $sql->execute();
    }

    public function excluir($id) {
        $sql = $this->conexao->prepare("DELETE FROM Marca WHERE idMarca = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id) {
        $sql = $this->conexao->prepare("SELECT * FROM Marca WHERE idMarca = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(marca $obj) {
        $sql = $this->conexao->prepare("UPDATE Marca SET nome = :nome, pais_origem = :pais_origem, ano_fundacao = :ano_fundacao
                                        WHERE idMarca = :idMarca");
        $sql->bindValue(":idMarca", $obj->getIdMarca());
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":pais_origem", $obj->getPaisOrigem());
        $sql->bindValue(":ano_fundacao", $obj->getAnoFundacao());
        return $sql->execute();
    }
}
?>
