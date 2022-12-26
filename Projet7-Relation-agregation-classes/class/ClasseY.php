<?php

class ClasseY{
    // Attributs
    public $nom;
    public $mesX = array();

    // Constructeur
    public function __construct($unNom)
    {
        $this->nom = $unNom;
    }

    // Méthode spécifique
    public function toString(){
        $message = "Je suis la classe Y et je me nomme ". $this->nom;
        if ($this->mesX != null){
            $message .= " et mes enfants sont : ";
            foreach ($this->mesX as $indiceList => $unX){
                $message .= $unX->nom. ", ";
            }
        }
        $message .= ".<br>";
        return $message;
    }

    public function existeUnX($unX){
        if(in_array($unX, $this->mesX)){
            return true;
        }
        else{
            return false;
        }
    }

    public function ajouterUnX($unX){
        // Sans doublon dans la liste
        if(!$this->existeUnX($unX)){
            array_push($this->mesX, $unX);
        }
    }

    public function supprimerUnX($unX){
        if ($this->existeUnX($unX)){
            $indiceDuX = array_search($unX, $this->mesX);
            unset($this->mesX[$indiceDuX]);
        }
    }


}