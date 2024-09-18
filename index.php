<?php
// Classe per gli animali
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
        $this->categorie = $categorie; 
    }

    // Funzione   
    public function GetInfo() {
        return "This product is called " . $this->name . ", its price is " . $this->price . ", and it is a product for " . $this->categorie  . "."; 
    }
}


// Classe figlia
class FoodProduct extends Product {
    public $flavor;

    public function __construct($name, $price, $categorie, $flavor) {
        parent::__construct($name, $price, $categorie); 
        $this->flavor = $flavor;
    }

    public function GetInfo() {
        return parent::GetInfo() . " The flavor is " . $this->flavor . ".";
    }
}


$dog = new Categories("Cane");
$cat = new Categories("Gatto");

var_dump($dog);
var_dump($cat);

// Stampo per testare classe figlia
$food1 = new FoodProduct("crochette", "20$", "Dog", "Chicken");
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