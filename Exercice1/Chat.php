<?php

/**
 * Classe Chat
 */
class Chat
{
    /**
     * Propriétés de notre animal
     */

    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;
    /**
     * Constructeur
     */
    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->setPrenom($prenom);
        $this->setCouleur($couleur);
        $this->setAge($age);
        $this->setRace($race);
        $this->setSexe($sexe);
    }
    /**
     * Retourne le prénom du chat
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Enregistre le prénom du chat
     */
    public function setPrenom($value)
    {
        $this->prenom = $value;
    }

    /**
     * Retourne l'âge du chat
     */
    public function getAge()
    {
        return $this->age;
    }
   /**
    * Enregistre l'âge du chat
    */
   public function setAge($value)
   {
       if (is_int($value)) {
           $this->age = $value;
       }
   }

   /**
    * Retourne la couleur du chat
    */
   public function getCouleur()
   {
       return $this->couleur;
   }
    /**
     * Enregistre la couleur du chat
     */
    public function setCouleur($value)
    {
        $this->couleur = $value;
    }

    /**
     * Retourne le sexe du chat
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Enregistre le sexe du chat
     */
    public function setSexe($value)
    {
        if ($value === 'femelle' || $value === 'male') {
            $this->sexe = $value;
        }
    }

    /**
     * Retourne la race du chat
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Enregistre la race du chat
     */
    public function setRace($value)
    {
        $this->race = $value;
    }

/**
 * retourne la valeur deedifferentes propriétés sous forme de tableau HTML 
 */
public function getInfos()
{
    $table = '<table>'
    .'<thead>'
    . '<tr>'
    .'<th>Prénom</th>'
    .'<th>Age</th>'
    .'<th>Couleur</th>'
    .'<th>Sexe</th>'
    .'<th>Race</th>'
    .'</tr>'
    .'</thead>'
    .'<tbody>'
    .'<tr>'
    ."<td>{$this->getPrenom()}</td>"
    ."<td>{$this->getAge()}</td>"
    ."<td>{$this->getCouleur()}</td>"
    ."<td>{$this->getSexe()}</td>"
    ."<td>{$this->getRace()}</td>"
    .'</tr>'
    .'</tbody>'
    .'</table>';
    return $table;

}
}