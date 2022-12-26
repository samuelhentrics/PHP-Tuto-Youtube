<?php


class ClasseY{
    // Attribut
    public $nom;
    public $monX;

    // Constructeur

    public function __construct($unNom)
    {
        $this->nom = $unNom;
    }

    // Encapsulation : get&set

    public function getMonX(){
        return $this->monX;
    }

    public function setMonX($unX){
        $this->monX = $unX;
    }

    // Méthode spécifique
    public function toString(){
        $message = "Je suis la classe Y et je me nomme ". $this->nom;
        if ($this->getMonX() != null){
            $message .= " et mon X se nomme " . $this->getMonX()->nom;
        }
        $message .= ".<br>";
        return $message;
    }


}