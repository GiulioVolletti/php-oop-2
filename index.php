<?php
/*
Crea e modellizza classi per gestire i prodotti di uno shop.
Creare una classe generale e poi creare altre classi (almeno un paio) che estendono questa classe generale.
Eseguire poi degli output istanziando oggetti delle varie classi.
*/
require_once __DIR__ . "/foods.php";
require_once __DIR__ . "/elettronic.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Prodotto alimentare</h1>
    <?php $carne = new Food('carne', 5, '12/02/2021', 2) ?>

    <p>
      <?php echo $carne->getProductInfo() ?>
    </p>

    <h1> Prodotto Elettronica </h1>

    <?php $carne = new Elettronic('Tv', 150, 2) ?>

    <p>
      <?php echo $carne->getProductInfo() ?>
    </p>

  </body>
</html>
