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
    public $image;  

    // Costruttore
    public function __construct($name, $price, Categories $categorie, $image) {
        try {
            // Controlla se il prezzo è numerico e maggiore o uguale a 0
            if (!is_numeric($price) || $price < 0) {
                throw new Exception("Errore: Il prezzo deve essere un numero positivo o zero.");
            }
            $this->name = $name;
            $this->price = $price;
            $this->categorie = $categorie; 
            $this->image = $image;
        } catch (Exception $e) {
            // Mostra il messaggio di errore
            echo $e->getMessage();
        }
    }

    // Funzione   
    public function GetInfo() {
        return $this->name . " " . $this->price . " " . $this->categorie->animal . " " . $this->categorie->icon . " Image: " . $this->image;
    }
}


// Classe figlia cibo
class FoodProduct extends Products {
    public $flavor;

    public function __construct($name, $price, Categories $categorie, $image, $flavor) {
        parent::__construct($name, $price, $categorie, $image); 
        $this->flavor = $flavor;
    }

    public function GetInfo() {
        return " The flavor is " . $this->flavor ;
    }
}

// Classe figlia giocattoli
class ToyProduct extends Products {
    public $material;

    public function __construct($name, $price, Categories $categorie, $image, $material) {
        parent::__construct($name, $price, $categorie, $image);
        $this->material = $material;
    }

    public function GetInfo() {
        return  " The toy is made of " . $this->material . "."; 
    }
}

// Classe figlia cucce
class KennelProduct extends Products {
    public $size;
    public $material;

    public function __construct($name, $price, Categories $categorie, $image, $size, $material) {
        parent::__construct($name, $price, $categorie, $image);  
        $this->size = $size;
        $this->material = $material;
    }

    public function GetInfo() {
        return  " The kennel size is " . $this->size . " and it is made of " . $this->material . ".";
    }
}

?>
