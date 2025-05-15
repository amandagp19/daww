<?php
include_once "perfumehasvenda.class.php";

class perfumeHasVendaDAO {
    private $conexao;
    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar() {
        $sql = $this->conexao->prepare("SELECT * FROM Perfume_has_Venda");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(perfume_has_venda $obj) {
        $sql = $this->conexao->prepare("INSERT INTO Perfume_has_Venda (perfume_idPerfume, venda_idVenda, preco, quantidade, desconto, subtotal)
                                        VALUES (:perfume_idPerfume, :venda_idVenda, :preco, :quantidade, :desconto, :subtotal)");
        $sql->bindValue(":perfume_idPerfume", $obj->getPerfumeIdPerfume());
        $sql->bindValue(":venda_idVenda", $obj->getVendaIdVenda());
        $sql->bindValue(":preco", $obj->getPreco());
        $sql->bindValue(":quantidade", $obj->getQuantidade());
        $sql->bindValue(":desconto", $obj->getDesconto());
        $sql->bindValue(":subtotal", $obj->getSubtotal());
        return $sql->execute();
    }

    public function excluir($id) {
        $sql = $this->conexao->prepare("DELETE FROM Perfume_has_Venda WHERE idPV = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id) {
        $sql = $this->conexao->prepare("SELECT * FROM Perfume_has_Venda WHERE idPV = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(perfume_has_venda  $obj) {
        $sql = $this->conexao->prepare("UPDATE Perfume_has_Venda SET perfume_idPerfume = :perfume_idPerfume, venda_idVenda = :venda_idVenda,
                                        preco = :preco, quantidade = :quantidade, desconto = :desconto, subtotal = :subtotal
                                        WHERE idPV = :idPV");
        $sql->bindValue(":idPV", $obj->getIdPV());
        $sql->bindValue(":perfume_idPerfume", $obj->getPerfumeIdPerfume());
        $sql->bindValue(":venda_idVenda", $obj->getVendaIdVenda());
        $sql->bindValue(":preco", $obj->getPreco());
        $sql->bindValue(":quantidade", $obj->getQuantidade());
        $sql->bindValue(":desconto", $obj->getDesconto());
        $sql->bindValue(":subtotal", $obj->getSubtotal());
        return $sql->execute();
    }
}
?>
