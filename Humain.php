<?php

/** 
 * classe "Humain"
*/
class Humain {
    /**
     * Mettre les propriétés dn visibilité
     * "private", c'est encapsuler les données
     * ...les écuriser
     * 
     * 
     * Taille de notre bonhomme
     */
    private $taille;
    /**
     * poids de notre bonhomme
     */
    private $poids;


    /**
     * constructeur
     * appel automatiquement à l'instruction de ma classe
     */

     public function __construct($taille, $poids)
     {
        /**echo "Je suis un constructeur"; */ 
         $this->setTaille($taille);
         $this->setPoids($poids);
    }
    
    /**
     * Setter
     * Permet d'affecter une valeure à notre
     * propriété $taille
     */
    public function setTaille($value)
    {
     
    if (is_numeric($value)) {
        $this->taille =$value;
    }
}
     public function getTaille()
    {
       return $this->taille;
    }
    public function setPoids($value)
    {
     
    if (is_numeric($value)) {
        $this->poids =$value;
    }
}
    public function getPoids()
    {
        return $this->poids;
    }
}
