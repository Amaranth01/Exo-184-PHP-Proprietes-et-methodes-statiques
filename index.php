<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Valeria");
echo "Nombre d'instance : " . Personnage::getNumInstances() . "<br>";

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Xanax");
echo "Le nombre de dragons crées est de : ".Dragon::nbDragon();

// Creation d'une instance de princesse
$princesse = new Princesse();
$princesse->setNom("Pierrette");

// Creation d'une instance de sorcier
$sorcier = new Sorcier();
$sorcier->setNom("Galfmord");





