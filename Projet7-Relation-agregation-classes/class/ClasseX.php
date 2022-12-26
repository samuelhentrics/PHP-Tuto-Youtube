<?php

class ClasseX{
    // Attributs
    public $nom;

    // Constructeur
    public function __construct($unNom)
    {
        $this->nom = $unNom;
    }

    // Méthode spécifique
    public function toString(){
        $message = "Je suis la classe X et je me nomme ". $this->nom . ".<br>";
        return $message;
    }


}