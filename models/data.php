<?php

include 'product.php';

// Creazione di categorie
$dog = new Categories("Dog", "🐶");
$cat = new Categories("Cat", "🐱");


// Creazione delle istanze dei prodotti
$products = [
    new FoodProduct("Crocchette", "20$", $dog, "Chicken"),
    new ToyProduct("Pallina", "5$", $cat, "Plastic"),
    new KennelProduct("Cuccia", "80$", $dog, "3mq", "Cotton")
];


?>