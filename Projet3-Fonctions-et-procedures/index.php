<?php

// Procédures (en CPP, en Java : void)
function affichageHelloworld(){
    print("Helloworld");
}

function affichageHelloworld2(){
    print("<h1>Helloworld</h1>");
}

//affichageHelloworld2();

// Fonctions

function retourneHelloworld(){
    $message = "Helloworld";
    return $message;
}

function somme($a,$b){
    $somme = $a + $b;
    return $somme;
}

print(somme(4, 5));



?>