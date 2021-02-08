<?php

require_once __DIR__ . "/productclass.php";

class Food extends Product {

  private $expirationDate;
  private $discount;

  public function __construct($name, $price, $expirationDate, $discount){
    parent::__construct($name, $price);
    $this->discount = $discount;
  }


  public function getProductInfo() {
    return  parent::getProductInfo() . "<br> prezzo scontato: " . ($this->price - $this->discount ) . " euro";
  }

}
