<?php
include_once "cliente.class.php";
class clienteDAO
{
    private $conexao;
    public function __construct()
    {
        
        $this->conexao = new PDO(
            "mysql:host=localhost; dbname=perfumaria",
            "root",
            ""
        );
    }
    public function listar()
    {
        $sql = $this->conexao->prepare
        (
            "SELECT * FROM cliente"
        );
        $sql->execute();
        return $sql->fetchAll();
    }
    public function inserir(cliente $cliente)
    {
        $sql = $this->conexao->prepare(
            "INSERT INTO cliente
        (nome,cpf,telefone,email,endereco,login,senha) 
        VALUES 
        (:nome,:cpf,:telefone,:email,:endereco,:login,:senha)"
        );
        $sql->bindValue(":nome", $cliente->getNome());
        $sql->bindValue(":cpf", $cliente->getCpf());
        $sql->bindValue(":telefone", $cliente->getTelefone());
        $sql->bindValue(":email", $cliente->getEmail());
        $sql->bindValue(":endereco", $cliente->getEndereco());
        $sql->bindValue(":login", $cliente->getLogin());
        $sql->bindValue(":senha", $cliente->getSenha());
        $sql->execute();
        return $this->conexao->lastInsertId();
    }
    public function excluir($idcliente)
    {
        $sql = $this->conexao->prepare(" DELETE FROM cliente WHERE idcliente= :IdCliente");
        $sql->bindValue(":IdCliente",$idcliente);
        return $sql->execute();
    }
    public function retornarUm($idcliente){
        $sql = $this->conexao->prepare("
        SELECT * FROM cliente WHERE idcliente=:IdCliente");
        $sql->bindValue(":IdCliente",$idcliente);
        $sql->execute();
        return $sql->fetch();
    }
    public function editar(cliente $cliente){
        $sql=$this->conexao->prepare("
        UPDATE cliente SET
        nome = :nome,cpf = :cpf, telefone = :telefone, email = :email,endereco = :endereco, login = :login, senha = :senha WHERE idcliente= :idcliente");
        $sql->bindValue(":idcliente", $cliente->getIdCliente());
        $sql->bindValue(":nome", $cliente->getNome());
        $sql->bindValue(":cpf", $cliente->getCpf());
        $sql->bindValue(":telefone", $cliente->getTelefone());
        $sql->bindValue(":email", $cliente->getEmail());
        $sql->bindValue(":endereco", $cliente->getEndereco());
        $sql->bindValue(":login", $cliente->getLogin());
        $sql->bindValue(":senha", $cliente->getSenha());
        return $sql->execute();
    }
}
?>