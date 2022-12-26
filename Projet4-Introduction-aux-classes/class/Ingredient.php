<?php 

class Ingredient{
    // ATTRIBUTS
    private $nom;

    // CONSTRUCTEUR ET DESTRUCTEUR
    public function __construct($nomIngredient)
    {
        $this->setNom($nomIngredient);
    }


    // ENCAPSULATION (get & set)
    public function getNom(){
        return $this->nom;
    }

    private function setNom($nouveauNom){
        $this->nom = $nouveauNom;
    }

    // Methodes usuelles
    public function toString(){
        $message = "Je suis l'ingrédient qui se nomme " . $this->getNom() . ".<br>";
        return $message;
    }

    public function afficherIngredient(){
        print($this->toString());
    }


    // Méthodes spécifiques

}