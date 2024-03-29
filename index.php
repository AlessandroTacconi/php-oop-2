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


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h1>Il mio negozio</h1>

  <div class="row">
          <?php foreach ($products as $prodotto): ?>
    <div class="col-4">

        <h2><?php echo $prodotto->getArticolo(); ?></h2>
        <p>Prezzo: <?php echo $prodotto->getPrezzo(); ?>€</p>
        <p>Categoria: <?php echo $prodotto->getCategoria()->getIcona(); ?></p>
        <img src="img/<?php echo $prodotto->getImmagine(); ?>" alt="<?php echo $prodotto->getArticolo(); ?>">
        <hr>
  
    </div>
        <?php endforeach; ?>
  </div>
</div>
</body>
</html>