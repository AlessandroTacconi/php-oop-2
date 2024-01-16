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

public function getProdotto()
    {
        return [
            'prezzo' => $this->prezzo,
            'articolo' => $this->articolo,
            'categoria' => $this->categoria,
            'immagine' => $this->immagine,
        ];
    }

}