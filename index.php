<?php

/**
 * Test de notre classe PHP "Humain"
 */

/**
 * Quatre possibilitées d'inclusion d'un fichier
 * 
 * // Erreur de type "warning", mais continue l'exécution du code PHP
 * include
 * include_once
 * 
 * // Erreur de type "Fatal error", mais ne continue pas l'éxecution du code PHP
 * require
 * require_once
 */

// Inclusion de ma classe PHP
require_once 'Humain.php';

// Déclaré nos premiers objets
// $jean est une instance de la classe Humain
// $jane est une instance de la classe Humain
$jean = new Humain(1.75, 75);
$jane = new Humain(1.55,45);
$george = new Humain (1.95, 95); 

var_dump($jean, $jane, $george);


//var_dump($jean, $jane, $george);
echo "<p>Jeane mesure {$jean->getTaille()}m et p&egravese {$jean->getPoids()}kg</p>";
echo "<p>Jane mesure {$jane->getTaille()}m et p&egravese {$jane->getPoids()}kg</p>";
echo "<p>George mesure {$george->getTaille()}m et p&egravese {$george->getPoids()}kg</p>";

//echo "Jean mesure $jean->taille m et pèse $jean->poids kg";
//echo "Jean mesure ".$jean->taille."m et pèse ".$jean->poids."kg";




