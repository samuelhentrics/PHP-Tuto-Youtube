<h1>Relation unidirectionnelle entre les classes</h1>

<?php

// Fonction d'affichage propre
function pr($data){
    echo "<pre>";
    print_r($data);
   echo "</pre>";
}


// Inclure les fichiers des classes à cette page
include_once("class/ClasseX.php");
include_once("class/ClasseY.php");

// Création de trois objets
$x1 = new ClasseX("Numero1");
$x2 = new ClasseX("Numero2");
$y1 = new ClasseY("Numero3");

// Affichage
print("Affichage des objets sans relation<br>");
pr($x1);
pr($x2);
pr($y1);

// Affichage avec toString()
print($x1->toString());
print($x2->toString());
print($y1->toString());


// Relation entre x1 et y1
$y1->setMonX($x1);

// Affichage après avoir mis en relation x1 et y1

print("Affichage des objets avec relation entre x1 et y1<br>");
pr($y1);

// Affichage avec toString()
print($y1->toString());

$x1->nom = "Test";

// Affichage avec toString()
print($y1->toString());

// Relation entre x1 et y1
$y1->setMonX($x2);

// Affichage après avoir mis en relation x1 et y1

print("Affichage des objets avec relation entre x1 et y1<br>");
pr($y1);





?>