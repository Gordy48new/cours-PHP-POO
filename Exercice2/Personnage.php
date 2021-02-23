<?php

class Personnage 
{
   /**
    * Propriétés des personnages
    */
    private $vie;
    private $attaque;
    private $nom;
    /**
     * Constructeur
     */
    public function __construct($vie, $attaque, $nom)
    {
        $this->setNom($nom);
        $this->setAttaque($attaque);
        $this->setVie($vie);
        
    }
    public function getVie()
    {
        return $this->vie;
    }
    /**
     * Enregistre le prénom de Personnage
     */
    public function setVie($value)
    {
        $this->vie = $value;
    }


    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    /**
     * vérifie si notre pzrsonnage est toujours vivant
     */
    public function enVie()
    {
        if($this->vie <=0) {
            return "{$this->getNom()} est mort...";
        }
        return "{$this->getNom()} est vivant !";

    }
    /**
     * Effectue une attaque sur un autre personnage.
     * Retire des points d'attaque sur les points de vie de l'autre personnage
     */
    public function faireAttaque($personnage)
    {
        $personnage->vie -= $this->getAttaque();
    }
    /**
    *Rajoute des points de vie aux points de vie actuelles
    */
    public function soigner($qte)
    {
        $vie = $this->getVie() + $qte;
        $this->setVie($vie);
        
        //$this->$vie += $qte;
    }
    public function affiche()
    {
        return "Mon personnage se nomme {$this->getNom()}, poss&egravede {$this->getVie()} points de vie et {$this->getAttaque()} points d'attaque";
    }
}
