<?php
/**
 * @file ClasseY.php
 * @author Samuel HENTRICS LOISTINE <samuel.hentrics@gmail.com>
 * @brief Fichier contenant la classe ClasseY
 * @details Contient la structure de la classe ClasseY ayant un nom et des enfants de la classe ClasseX
 * @version 1.0
 * @date 2022-12-26
 */


/**
 * ClasseY ayant un nom et des enfants de la classe ClasseX
 */
class ClasseY{
    // Attributs

    /**
     * Nom de la classe ClasseY
     * @var string
     */
    public $nom;

    /**
     * Liste contenant des objets de la classe ClasseX
     * @var array
     */
    public $mesX = array();

    // Constructeur

    /**
     * Constructeur de la ClasseY
     * @param mixed $unNom Nom a attribué à la classe ClasseY
     */
    public function __construct($unNom)
    {
        $this->nom = $unNom;
    }

    // Méthode spécifique

    /**
     * Retourne un message contenant les informations sur cette classe
     * @return string
     */
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


    /**
     * Retourne vrai si un objet de la ClasseX est dans la liste mesX, faux sinon
     * @param ClasseX $unX Objet de la ClasseX qui doit être vérifié
     * @return bool
     */
    public function existeUnX($unX){
        if(in_array($unX, $this->mesX)){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Ajoute un objet de la classe ClasseX dans la liste mesX
     * @param ClasseX $unX
     * @return void
     */
    public function ajouterUnX($unX){
        // Sans doublon dans la liste
        if(!$this->existeUnX($unX)){
            array_push($this->mesX, $unX);
        }
    }

    /**
     * Supprime un objet de la classe ClasseX s'il existe dans la liste mesX
     * @param ClasseX $unX
     * @return void
     */
    public function supprimerUnX($unX){
        if ($this->existeUnX($unX)){
            $indiceDuX = array_search($unX, $this->mesX);
            unset($this->mesX[$indiceDuX]);
        }
    }


}