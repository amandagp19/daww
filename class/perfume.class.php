<?php
class perfume
{
    private $idPerfume;
    private $nome;
    private $idCategoria;
    private $idFragrancia;
    private $idMarca;
    private $preco;
    private $volumeMl;
    private $oferta;
    private $estoque;

    public function getIdPerfume()
    {
        return $this->idPerfume;
    }
    public function setIdPerfume($valor)
    {
        $this->idPerfume = $valor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    public function setIdCategoria($valor)
    {
        $this->idCategoria = $valor;
    }
    public function getIdFragrancia()
    {
        return $this->idFragrancia;
    }
    public function setIdFragrancia($valor)
    {
        $this->idFragrancia = $valor;
    }
    public function getIdMarca()
    {
        return $this->idMarca;
    }
    public function setIdMarca($valor)
    {
        $this->idMarca = $valor;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($valor)
    {
        $this->preco = $valor;
    }
    public function getVolumeMl()
    {
        return $this->volumeMl;
    }
    public function setVolumeMl($valor)
    {
        $this->volumeMl = $valor;
    }
    public function getOferta()
    {
        return $this->oferta;
    }
    public function setOfertar($valor)
    {
        $this->oferta = $valor;
        
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($valor)
    {
        $this->estoque = $valor;
    }
}
?>
