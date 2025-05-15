<?php
include_once "venda.class.php";

class vendaDAO {
private $conexao;
    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar() {
        $sql = $this->conexao->prepare("SELECT * FROM Venda");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(venda $obj) {
        $sql = $this->conexao->prepare("INSERT INTO Venda (idCliente, data, forma_pagamento, retirada, endereco, status, total, observacoes)
                                        VALUES (:idCliente, :data, :forma_pagamento, :retirada, :endereco, :status, :total, :observacoes)");
        $sql->bindValue(":idCliente", $obj->getIdCliente());
        $sql->bindValue(":data", $obj->getData());
        $sql->bindValue(":forma_pagamento", $obj->getFormaPagamento());
        $sql->bindValue(":retirada", $obj->getRetirada());
        $sql->bindValue(":endereco", $obj->getEndereco());
        $sql->bindValue(":status", $obj->getStatus());
        $sql->bindValue(":total", $obj->getTotal());
        $sql->bindValue(":observacoes", $obj->getObservacoes());
        return $sql->execute();
    }

    public function excluir($id) {
        $sql = $this->conexao->prepare("DELETE FROM Venda WHERE idVenda = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id) {
        $sql = $this->conexao->prepare("SELECT * FROM Venda WHERE idVenda = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(venda $obj) {
        $sql = $this->conexao->prepare("UPDATE Venda SET 
                                        idCliente = :idCliente, data = :data, forma_pagamento = :forma_pagamento, retirada = :retirada, endereco = :endereco, status = :status, total = :total, observacoes = :observacoes
                                        WHERE idVenda = :idVenda");
        $sql->bindValue(":idVenda", $obj->getIdVenda());
        $sql->bindValue(":idCliente", $obj->getIdCliente());
        $sql->bindValue(":data", $obj->getData());
        $sql->bindValue(":forma_pagamento", $obj->getFormaPagamento());
        $sql->bindValue(":retirada", $obj->getRetirada());
        $sql->bindValue(":endereco", $obj->getEndereco());
        $sql->bindValue(":status", $obj->getStatus());
        $sql->bindValue(":total", $obj->getTotal());
        $sql->bindValue(":observacoes", $obj->getObservacoes());
        return $sql->execute();
    }
}
?>
