<?php
class fragrancia
{
    private $idFragrancia;
    private $tipo;
    private $intensidade;
    private $origem;

    public function getIdFragrancia()
    {
        return $this->idFragrancia;
    }
    public function setIdFragrancia($valor)
    {
        $this->idFragrancia = $valor;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($valor)
    {
        $this->tipo = $valor;
    }
    public function getIntensidade()
    {
        return $this->intensidade;
    }
    public function setIntensidade($valor)
    {
        $this->intensidade = $valor;
    }
    public function getOrigem()
    {
        return $this->origem;
    }
    public function setOrigem($valor)
    {
        $this->origem = $valor;
    }
}
?>