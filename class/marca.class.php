<?php
class marca
{
    private $idMarca;
    private $nome;
    private $paisOrigem;
    private $anoFundacao;

    public function getIdMarca()
    {
        return $this->idMarca;
    }
    public function setIdMarca($valor)
    {
        $this->idMarca = $valor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function getPaisOrigem()
    {
        return $this->paisOrigem;
    }
    public function setPaisOrigem($valor)
    {
        $this->paisOrigem = $valor;
    }
    public function getAnoFundacao()
    {
        return $this->anoFundacao;
    }
    public function setAnoFundacao($valor)
    {
        $this->anoFundacao = $valor;
    }
}
?>
