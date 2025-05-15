<?php
class cliente
{
    private $idcliente;
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $endereco;
    private $login;
    private $senha;

    public function getIdCliente()
    {
        return $this->idcliente;
    }
    public function setIdCliente($valor)
    {
        $this->idcliente = $valor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($valor)
    {
        $this->cpf = $valor;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($valor)
    {
        $this->telefone = $valor;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($valor)
    {
        $this->email = $valor;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($valor)
    {
        $this->endereco = $valor;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($valor)
    {
        $this->login = $valor;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($valor)
    {
        $this->senha = $valor;
    }
}
?>