<?php


class Categoria {
    private $nome;
    private $icona;

public function __construct($_nome, $_icona)
  {
    $this->nome = $_nome;
    $this->icona = $_icona;
  }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getIcona()
    {
        return $this->icona;
    }

    public function setIcona($_icona)
    {
        $this->icona = $_icona;
    }

}