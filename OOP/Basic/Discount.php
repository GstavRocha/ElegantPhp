<?php
class Discount{
    public $name;
    public $price;

    function __construct($name,$price){
        $this->name= $name;
        $this->price= $price;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setName($name){
        $this->nome=$name;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function makeDiscount($discountParam){
        $originalPrice = $this->price;
        $name = $this->name;
        $priceWithDiscount = $originalPrice * (1-$discountParam); 
        echo  $name.' preço é '.$originalPrice.' com desconto de '.$discountParam. 'O preço fica '. $priceWithDiscount;
        return $priceWithDiscount.' '.$name;
    }
}

$teste = new Discount("Sapato", 10.00);
$check=$teste->makeDiscount(0.20);
echo $check;