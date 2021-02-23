<?php

require_once 'Personnage.php';


$arthur= new Personnage (35, 185, "Arthur");
$merlin= new Personnage (16, 123, "Merlin")
;//affiche ces infos
echo $arthur->affiche();
echo $merlin->affiche();

// ajoute des points de vie à notre personnage
//$arthur->soigner(20);
echo "<p>{$arthur->getVie()}</p>"; 
echo "<p>{$merlin->getVie()}</p>"; 


//Vérifie si notre personnage est toujours vivant
//echo $arthur->enVie();


//Attaques
$arthur->faireAttaque($merlin);
$merlin->faireAttaque($arthur);


echo "<p>{$arthur->affiche()}</p>"; 
echo "<p>{$merlin->affiche()}</p>"; 

$merlin->faireAttaque($arthur);
$arthur->soigner(20);
$merlin->faireAttaque($arthur);

echo $arthur->enVie();
echo $merlin->envie();
