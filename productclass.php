<?php

/*
 product
 */
class Product {

  public $name;
  protected $price;

  function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  protected function getProductInfo() {
    return "Nome Prodotto: " . $this->name . "<br> prezzo base: " . $this->price ." euro";
  }
}


?>
