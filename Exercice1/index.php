<?php

require_once 'Chat.php';

$zelda = new Chat ("Zelda", 1, "Blanc", "Femelle", "Angora");
$pepe = new Chat("P&eacutep&eacute", 4, "Roux", "Mâle", "Siamois");
$lulu = new Chat("Lulu", 3, "Noir", "Femelle", "Persan");


 echo "<p>Chat1 s'appelle {$zelda->getPrenom()} et a {$zelda->getAge()}an</p>";
 echo "<p>Chat2 s'appelle {$pepe->getPrenom()} et a {$pepe->getAge()}ans</p>";
 echo "<p>Chat3 s'appelle {$lulu->getPrenom()} et a {$lulu->getAge()}ans</p>";

