<h1>Relation bidirectionnelle entre les classes</h1>

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

// Déclarer 4 objets
$x1 = new ClasseX("Numero1");
$x2 = new ClasseX("Numero2");
$y1 = new ClasseY("Numero3");
$y2 = new ClasseY("Numero4");


// Affichage
print("Affichage des objets sans relation<br>");
pr($x1);
pr($x2);
pr($y1);
pr($y2);

// ToString

// Affichage avec toString()
print($x1->toString());
print($x2->toString());
print($y1->toString());
print($y2->toString());
print("<br>");


// Relation entre (x1 et y1) et (x2 et y2)

$x1->lierMonY($y1);
$y2->lierMonX($x2);

// Affichage
print("Affichage des objets avec relation entre (x1 et y1) et (x2 et y2)<br>");
pr($x1);
pr($x2);
pr($y1);
pr($y2);

// ToString


// Affichage avec toString()
print($x1->toString());
print($x2->toString());
print($y1->toString());
print($y2->toString());
print("<br>");

$x1->lierMonY($y2);


// Affichage
print("Affichage des objets avec relation entre (x1 et y1) et (x2 et y2)<br>");
pr($x1);
pr($x2);
pr($y1);
pr($y2);

// ToString


// Affichage avec toString()
print($x1->toString());
print($x2->toString());
print($y1->toString());
print($y2->toString());
print("<br>");


?>