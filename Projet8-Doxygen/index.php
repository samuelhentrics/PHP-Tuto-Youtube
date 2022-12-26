<h1>Relation d'agrégation entre les classes</h1>

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

// Créer 3 objets de la classe X et un objet de la classe Y
$y1 = new ClasseY("Numero1");
$x2 = new ClasseX("Numero2");
$x3 = new ClasseX("Numero3");
$x4 = new ClasseX("Numero4");

print($y1->toString());
print($x2->toString());
print($x3->toString());
print($x4->toString());
print("<br>");

// Rajouter x2 dans y1

print("<h2>Rajouter x2 dans y1 </h2> <br>");
$y1->ajouterUnX($x2);

print($y1->toString());
print("<br>");


// Rajouter x2 dans y1

print("<h2>Rajouter x2 dans y1 </h2><br>");
$y1->ajouterUnX($x2);

pr($y1);
print($y1->toString());
print("<br>");

// Rajouter x3 dans y1

print("<h2>Rajouter x3 dans y1 </h2><br>");
$y1->ajouterUnX($x3);

pr($y1);
print($y1->toString());
print("<br>");

// Rajouter x3 dans y1

print("<h2>Vérifier si x4 est dans y1 </h2><br>");
if($y1->existeUnX($x4)){
    echo "Il existe x4 dans y1<br>";
}
else{
    echo "Il n'existe pas x4 dans y1<br>";
}

$y1->ajouterUnX($x4);

if($y1->existeUnX($x4)){
    echo "Il existe x4 dans y1<br>";
}
else{
    echo "Il n'existe pas x4 dans y1<br>";
}

print("<br>");



?>