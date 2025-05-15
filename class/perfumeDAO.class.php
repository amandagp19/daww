<?php
include_once "perfume.class.php";

class perfumeDAO {
    private $conexao;
    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar() {
        $sql = $this->conexao->prepare("SELECT * FROM Perfume");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(perfume $obj) {
        $sql = $this->conexao->prepare(
            "INSERT INTO Perfume 
            (nome, idCategoria, idFragrancia, idMarca, preco, volumeMl,oferta, estoque)
                    VALUES 
            (:nome, :idCategoria, :idFragrancia, :idMarca, :preco, :volumeMl, :oferta, :estoque)"
        );
                        
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":idCategoria", $obj->getIdCategoria());
        $sql->bindValue(":idFragrancia", $obj->getIdFragrancia());
        $sql->bindValue(":idMarca", $obj->getIdMarca());
        $sql->bindValue(":preco", $obj->getPreco());
        $sql->bindValue(":volumeMl", $obj->getVolumeMl());
        $sql->bindValue(":oferta", $obj->getOferta());
        $sql->bindValue(":estoque", $obj->getEstoque());
        $sql->execute();
        return $this->conexao->lastInsertId();
    }

    public function excluir($idperfume) {
        $sql = $this->conexao->prepare("DELETE FROM Perfume WHERE idperfume = :idperfume");
        $sql->bindValue(":idperfume", $idperfume);
        return $sql->execute();
    }

    public function retornarUm($idperfume) {
        $sql = $this->conexao->prepare("SELECT * FROM Perfume WHERE idPerfume = :idperfume");
        $sql->bindValue(":idperfume", $idperfume);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(perfume $obj) {
        $sql = $this->conexao->prepare("UPDATE Perfume SET nome = :nome, idCategoria = :idCategoria, idFragrancia = :idFragrancia, 
                                        idMarca = :idMarca, preco = :preco, volumeMl = :volumeMl, oferta = :oferta, estoque = :estoque
                                        WHERE idPerfume = :idPerfume");
        $sql->bindValue(":idPerfume", $obj->getIdPerfume());
        $sql->bindValue(":nome", $obj->getNome());
        $sql->bindValue(":idCategoria", $obj->getIdCategoria());
        $sql->bindValue(":idFragrancia", $obj->getIdFragrancia());
        $sql->bindValue(":idMarca", $obj->getIdMarca());
        $sql->bindValue(":preco", $obj->getPreco());
        $sql->bindValue(":volumeMl", $obj->getVolumeMl());
        $sql->bindValue(":oferta", $obj->getOferta());
        $sql->bindValue(":estoque", $obj->getEstoque());
        return $sql->execute();
    }

    public function Ofertar(perfume $perfume){
            $sql = $this->conexao->prepare("
            UPDATE perfume SET
            oferta = :oferta
            WHERE idperfume = :idperfume
        ");
        $sql->bindValue(":idperfume", $perfume->getIdperfume());
        $sql->bindValue(":oferta", $perfume->getOferta());
        return $sql->execute();
        }
    }

?>
