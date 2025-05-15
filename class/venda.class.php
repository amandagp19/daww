<?php
class venda
{
    private $idVenda;
    private $idCliente;
    private $data;
    private $formaPagamento;
    private $retirada;
    private $endereco;
    private $status;
    private $total;
    private $observacoes;

    public function getIdVenda()
    {
        return $this->idVenda;
    }
    public function setIdVenda($valor)
    {
        $this->idVenda = $valor;
    }
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    public function setIdCliente($valor)
    {
        $this->idCliente = $valor;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData($valor)
    {
        $this->data = $valor;
    }
    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }
    public function setFormaPagamento($valor)
    {
        $this->formaPagamento = $valor;
    }
    public function getRetirada()
    {
        return $this->retirada;
    }
    public function setRetirada($valor)
    {
        $this->retirada = $valor;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($valor)
    {
        $this->endereco = $valor;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($valor)
    {
        $this->status = $valor;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function setTotal($valor)
    {
        $this->total = $valor;
    }
    public function getObservacoes()
    {
        return $this->observacoes;
    }
    public function setObservacoes($valor)
    {
        $this->observacoes = $valor;
    }
}
?>
