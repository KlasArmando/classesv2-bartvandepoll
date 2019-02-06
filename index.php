<?php
class Product{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}

$product1 = new Product('test',12);
echo $product1->name . "<br>";
echo $product1->price . "<br>";

class Klant{
    public $naam;
    public $leeftijd;
    public $klantnummer;

    public function __construct($naam, $leeftijd, $klantnummer)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->klantnummer = $klantnummer;
    }
}

$klant1 = new Klant('bart',22, 44);
echo $klant1->naam . "<br>";
echo $klant1->leeftijd . "<br>";
echo $klant1->klantnummer . "<br>";