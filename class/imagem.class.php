<?php
class imagem
{
    private $idImagem;
    private $idPerfume;
    private $descricao;
    private $caminho;
    private $formato;

    public function getIdImagem()
    {
        return $this->idImagem;
    }
    public function setIdImagem($valor)
    {
        $this->idImagem = $valor;
    }

    public function getIdPerfume()
    {
        return $this->idPerfume;
    }
    public function setIdPerfume($valor)
    {
        $this->idPerfume = $valor;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($valor)
    {
        $this->descricao = $valor;
    }

    public function getCaminho()
    {
        return $this->caminho;
    }
    public function setCaminho($valor)
    {
        $this->caminho = $valor;
    }

    public function getFormato()
    {
        return $this->formato;
    }
    public function setFormato($valor)
    {
        $this->formato = $valor;
    }
}
?>
