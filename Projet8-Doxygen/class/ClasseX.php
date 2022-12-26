<?php
/**
 * @file ClasseX.php
 * @author Samuel HENTRICS LOISTINE <samuel.hentrics@gmail.com>
 * @brief Fichier contenant la classe ClasseX
 * @details Contient la structure de la classe ClasseX ayant un nom
 * @version 1.0
 * @date 2022-12-26
 */

/**
 * ClasseX permettant de créer un objet avec comme attribut un nom
 */
class ClasseX{
    // Attributs

    /**
     * Nom de la ClasseX
     * @var string
     */
    public $nom;

    // Constructeur

    /**
     * Constructeur de la ClasseX demandant en paramètre un nom pour cette classe.
     * @param string $unNom Nom que l'on souhaite attribué à la ClasseX
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
        $message = "Je suis la classe X et je me nomme ". $this->nom . ".<br>";
        return $message;
    }


}