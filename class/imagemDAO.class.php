<?php
include_once "imagem.class.php";

class imagemDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost; dbname=Perfumaria", "root", "");
    }

    public function listar()
    {
        $sql = $this->conexao->prepare("SELECT * FROM Imagem");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function inserir(imagem $obj)
    {
        $sql = $this->conexao->prepare("INSERT INTO Imagem (idPerfume, descricao, caminho, formato)
                                        VALUES (:idPerfume, :descricao, :caminho, :formato)");
        $sql->bindValue(":idPerfume", $obj->getIdPerfume());
        $sql->bindValue(":descricao", $obj->getDescricao());
        $sql->bindValue(":caminho", $obj->getCaminho());
        $sql->bindValue(":formato", $obj->getFormato());
        return $sql->execute();
    }

    public function excluir($id)
    {
        $sql = $this->conexao->prepare("DELETE FROM Imagem WHERE idImagem = :id");
        $sql->bindValue(":id", $id);
        return $sql->execute();
    }

    public function retornarUm($id)
    {
        $sql = $this->conexao->prepare("SELECT * FROM Imagem WHERE idImagem = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function editar(imagem $obj)
    {
        $sql = $this->conexao->prepare("UPDATE Imagem SET idPerfume = :idPerfume, descricao = :descricao, caminho = :caminho, formato = :formato
                                        WHERE idImagem = :idImagem");
        $sql->bindValue(":idImagem", $obj->getIdImagem());
        $sql->bindValue(":idPerfume", $obj->getIdPerfume());
        $sql->bindValue(":descricao", $obj->getDescricao());
        $sql->bindValue(":caminho", $obj->getCaminho());
        $sql->bindValue(":formato", $obj->getFormato());
        return $sql->execute();
    }
}
?>
