<?php

require_once __DIR__ . "/productclass.php";

class Elettronic extends Product {

  private $guarantee;

  public function __construct($name, $price, $guarantee){
    parent::__construct($name, $price);
    $this->guarantee = $guarantee;
  }


  public function getProductInfo() {
    return  parent::getProductInfo() . "<br> Garanzia: " . $this->guarantee . " anni";
  }

}
