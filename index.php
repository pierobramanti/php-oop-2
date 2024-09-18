<?php
// classe per gli animali
class Categories {
    public $animal;

    public function __construct($animal) {
        $this->animal = $animal;
    }
}


class Product {
    public $name;
    public $price;
    public $categorie;

    // Costruttore
    public function __construct($name, $price, $categorie) {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categorie;
    }

    // Funzione   
    public function GetInfo() {
        return "This product is called " . $this->name . ", its price is " . $this->price . ", and it is a product for " . $this->categories . ".";
    }
}

$food1 = new Product("crochette", "20$", "Dog");
echo $food1->GetInfo(); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>