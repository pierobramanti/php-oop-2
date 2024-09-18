<?php
// Classe per gli animali
class Categories {
    public $animal;
    public $icon;

    public function __construct($animal, $icon) {
        $this->animal = $animal;
        $this->icon = $icon;
    }
}


class Products {
    public $name;
    public $price;
    public $categorie; 

    // Costruttore
    public function __construct($name, $price, Categories $categorie) {
        $this->name = $name;
        $this->price = $price;
        $this->categorie = $categorie; 
    }

    // Funzione   
    public function GetInfo() {
        return $this->name . " " . $this->price . " " . $this->categorie->animal . " " . $this->categorie->icon;
    }
}


// Classe figlia cibo
class FoodProduct extends Products {
    public $flavor;

    public function __construct($name, $price, Categories $categorie, $flavor) {
        parent::__construct($name, $price, $categorie); 
        $this->flavor = $flavor;
    }

    public function GetInfo() {
        return parent::GetInfo() . " The flavor is " . $this->flavor . ".";
    }
}

// Classe figlia giocattoli
class ToyProduct extends Products {
    public $material;

    public function __construct($name, $price, Categories $categorie, $material) {
        parent::__construct($name, $price, $categorie);
        $this->material = $material;
    }

    public function GetInfo() {
        return parent::GetInfo() . " The toy is made of " . $this->material . "."; 
    }
}


// Classe figlia cucce
class KennelProduct extends Products {
    public $size;
    public $material;

    public function __construct($name, $price, Categories $categorie, $size, $material) {
        parent::__construct($name, $price, $categorie);  
        $this->size = $size;
        $this->material = $material;
    }

    public function GetInfo() {
        return parent::GetInfo() . " The kennel size is " . $this->size . " and it is made of " . $this->material . ".";
    }
}

// Creazione di categorie
$dog = new Categories("Cane", "🐶");
$cat = new Categories("Gatto", "🐱");


// Creazione delle istanze dei prodotti
$products = [
    new FoodProduct("Crocchette", "20$", $dog, "Chicken"),
    new ToyProduct("Pallina", "5$", $cat, "Plastic"),
    new KennelProduct("Cuccia", "80$", $dog, "3mq", "Cotton")
];

//var_dump($dog);
//var_dump($cat);

// Stampo per testare classe figlia cibo
//$food1 = new FoodProduct("crochette", "20$", $dog, "Chicken");
//echo $food1->GetInfo(); 

//echo "<br>";
// Stampo per testare classe figlia giochi
//$toy1 = new ToyProduct("pallina", "5$", $cat, "plastic");
//echo $toy1->GetInfo(); 

// Stampo per la classe figlia cucce
//echo "<br>";
//$kennel1 = new KennelProduct("Cuccia", "80$", $dog, "3mq", "Cotton");
//echo $kennel1->GetInfo(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Animal Kingdom Cards</title>
</head>
<body>
    <div class="container">
        <div class="row">
        </div>
    </div>
</body>
</html>