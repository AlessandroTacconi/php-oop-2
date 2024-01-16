<?php


class Categoria {
    private $nome;
    private $icona;

public function __construct($_nome, $_icona)
  {
    $this->nome = $_nome;
    $this->icona = $_icona;
  }

    public function getCategoria()
    {
        return [
            'nome' => $this->nome,
            'icona' => $this->icona,
        ];
    }

}