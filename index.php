<?php
require_once __DIR__.'/models/categoria.php';
require_once __DIR__.'/models/prodotto.php';

// Categoria Cani e Gatti
$cani = new Categoria("Cani", '<i class="fa-solid fa-dog"></i>');
$gatti = new Categoria("Gatti", '<i class="fa-solid fa-cat"></i>');


class Cibo extends Prodotto {}
class Gioco extends Prodotto {}
class Cuccia extends Prodotto {}

$croccantiniCani = new Cibo(12.50, "Croccantini per Cani", $cani, 'croccantini.jpg');
$carneGatti = new Cibo(9.00, "Carne in scatola per Gatti",  $gatti,  'carne.jpg');
$paperellaDiGomma = new Gioco(8.00, "Paperella di gomma per Cani",  $cani, 'paperella.jpg');
$cucciaPerCani = new Cuccia(29.99, "Cuccia per Cani", $cani, 'cuccia-cani.jpg');
$cucciaPerGatti = new Cuccia(19.99, "Cuccia per Gatti", $gatti, 'cuccia-gatti.jpg');



$products = [$croccantiniCani, $carneGatti, $paperellaDiGomma, $cucciaPerCani, $cucciaPerGatti];

$categories = [$cani, $gatti];
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    <?php foreach ($products as $prodotto): ?>
        <h2><?php echo $prodotto->getProdotto()['articolo']; ?></h2>
        <p>Prezzo: <?php echo $prodotto->getProdotto()['prezzo']; ?>€</p>
        <p>Categoria: <?php echo $prodotto->getProdotto()['categoria']->getCategoria()['icona']; ?></p>
        </p>


        <img src="img/<?php echo $prodotto->getProdotto()['immagine']; ?>" alt="<?php echo $prodotto->getProdotto()['articolo']; ?>">
        <hr>
    <?php endforeach; ?>
</div>
</body>
</html>