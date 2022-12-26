<?php

class ClasseX{
    // Attributs
    public $nom;
    public $monY;

    // Constructeur
    public function __construct($unNom)
    {
        $this->nom = $unNom;
    }

    // Encapsulation get&set
    public function getMonY(){
        return $this->monY;
    }

    public function setMonY($unY){
        $this->monY = $unY;
    }

    // Méthode spécifique
    public function toString(){
        $message = "Je suis la classe X et je me nomme ". $this->nom;
        if ($this->getMonY() != null){
            $message .= " et mon Y se nomme " . $this->getMonY()->nom;
        }
        $message .= ".<br>";
        return $message;
    }

    public function delierMonY(){
        if ($this->getMonY() != null){
            $this->getMonY()->setMonX(null);
            $this->setMonY(null);
        }
    }

    public function lierMonY($unY){
        if ($this->getMonY() != null){
            $this->delierMonY();
        }
        $unY->delierMonX();
        $this->setMonY($unY);
        $unY->setMonX($this);
    }


}