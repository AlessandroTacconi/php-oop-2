<?php


trait TraitNome {
    private $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
}


