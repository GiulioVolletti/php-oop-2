<?php

require_once __DIR__ . "/productclass.php";

class Food extends Product {

  private $expirationDate;
  private $discount;

  public function __construct($name, $price, $expirationDate, $discount){
    parent::__construct($name, $price);
    $this->discount = $discount;
  }

  public function getPrezzoFinale($a, $b){
    $total = ($a - ($a * ($b / 100)));
    return $total;
  }

  public function getProductInfo() {
    return  parent::getProductInfo() . "<br> prezzo scontato: " . $this->getPrezzoFinale($this->price , $this->discount ) . " euro";
  }

}
