<?php

class Product {
    public $name;
    public $price;
    public $categories;

    // Costruttore
    public function __construct($name, $price, $categories) {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
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