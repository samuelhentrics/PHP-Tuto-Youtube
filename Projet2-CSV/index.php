<?php

$nomFichier = "test.csv";
$monFichier = fopen($nomFichier, "r");

if (!($monFichier)){
    print("Impossible d'ouvrir le fichier");
    exit;
}
else{
    fgetcsv($monFichier, null, ";");
    while( $ligne = fgetcsv($monFichier, null, ";")){
        print($ligne[0] . " " . $ligne[1] . "<br>");
    }
}

fclose($monFichier);