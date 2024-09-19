<?php

include 'product.php';

// Creazione di categorie
$dog = new Categories("Dog", "🐶");
$cat = new Categories("Cat", "🐱");


// Creazione delle istanze dei prodotti
$products = [
    new FoodProduct("Crocchette", "12$", $dog, "./img/fooddog.jpg", "Chicken"),
    new ToyProduct("Pallina", "5$", $cat, "./img/ballcat.jpg", "Plastic"),
    new KennelProduct("Cuccia", "80$", $dog, "./img/doghouse.jpg", "3mq", "Wood"),
];



?>