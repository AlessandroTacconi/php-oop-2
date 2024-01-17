<?php

class Prodotto {
    private $prezzo;
    private $articolo;
    private $categoria; // Cani o Gatti
    private $immagine;

public function __construct($_prezzo, $_articolo, $_categoria, $_immagine)
  {
    $this->prezzo = $_prezzo;
    $this->articolo = $_articolo;
    $this->categoria = $_categoria;
    $this->immagine = $_immagine;
  }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
    }

    public function getArticolo()
    {
        return $this->articolo;
    }

    public function setArticolo($_articolo)
    {
        $this->articolo = $_articolo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($_categoria)
    {
        $this->categoria = $_categoria;
    }

    public function getImmagine()
    {
        return $this->immagine;
    }

    public function setImmagine($_immagine)
    {
        $this->immagine = $_immagine;
    }

}