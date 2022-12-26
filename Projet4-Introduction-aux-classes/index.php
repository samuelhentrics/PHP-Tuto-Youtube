<?php

// Inclure les classes
include("class/Ingredient.php");


// Crée deux objets Ingredients

$ingredient1 = new Ingredient("Farine");
$ingredient2 = new Ingredient("Poivre");

// Affichage
$ingredient1->afficherIngredient();
$ingredient2->afficherIngredient();