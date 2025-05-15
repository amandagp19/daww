<?php
class perfume_has_venda
{
    private $idPV;
    private $perfumeIdPerfume;
    private $vendaIdVenda;
    private $preco;
    private $quantidade;
    private $desconto;
    private $subtotal;

    public function getIdPV()
    {
        return $this->idPV;
    }
    public function setIdPV($valor)
    {
        $this->idPV = $valor;
    }
    public function getPerfumeIdPerfume()
    {
        return $this->perfumeIdPerfume;
    }
    public function setPerfumeIdPerfume($valor)
    {
        $this->perfumeIdPerfume = $valor;
    }
    public function getVendaIdVenda()
    {
        return $this->vendaIdVenda;
    }
    public function setVendaIdVenda($valor)
    {
        $this->vendaIdVenda = $valor;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($valor)
    {
        $this->preco = $valor;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($valor)
    {
        $this->quantidade = $valor;
    }
    public function getDesconto()
    {
        return $this->desconto;
    }
    public function setDesconto($valor)
    {
        $this->desconto = $valor;
    }
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    public function setSubtotal($valor)
    {
        $this->subtotal = $valor;
    }
}
?>
