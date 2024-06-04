<?php
// chargement du parent
require_once "PersoBase.php";
// chargement d'un enfant
require_once "PersoMagicien.php";
// chargement de l'enfant d'enfant
require_once "PersoMagicienNoire.php";

$persoBase = new PersoBase("Mike",47,"Nain","Noir");
//$persoBase->setAlive(25);
$persoMagicien = new PersoMagicien("Lee",22,"Cyborg");
//$persoMagicien->setAlive(true);
 $persoMagicienNoire = new PersoMagicienNoire("Emrah",30,"Humain", "Sorcier");
//$persoMagicien->setAlive(true);

echo $persoBase->persoAvance();
echo "<br>";
echo $persoMagicien->persoAvance();
echo "<br>";
echo "<p>Force : {$persoBase->getForce()} <br>Agilité : {$persoBase->getAgilite()}";
//echo $persoMagicienNoire->persoAvance();

// la constante publique vient du parent, elle est héritée
var_dump(PersoMagicien::ESPECE_CHOICE);

var_dump($persoBase,$persoMagicien,$persoMagicienNoire);