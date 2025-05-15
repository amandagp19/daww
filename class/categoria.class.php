<?php
class categoria
{
    private $idCategoria;
    private $nome;
    private $descricao;

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    public function setIdCategoria($valor)
    {
        $this->idCategoria = $valor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($valor)
    {
        $this->descricao = $valor;
    }
}
?>
