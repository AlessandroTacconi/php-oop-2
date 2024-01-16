<?php

class Prodotto {
    protected $prezzo;
    protected $articolo;
    protected $categoria; // Cani o Gatti
    protected $immagine;

public function __construct($_prezzo, $_articolo, $_categoria, $_immagine)
  {
    $this->prezzo = $_prezzo;
    $this->articolo = $_articolo;
    $this->categoria = $_categoria;
    $this->immagine = $_immagine;
  }

}


// Categoria Cani e Gatti
$cani = new Categoria("Cani", '<i class="fa-solid fa-dog"></i>');
$gatti = new Categoria("Gatti", '<i class="fa-solid fa-cat"></i>');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
</body>
</html>
