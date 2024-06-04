<?php

require_once "PersoBase.php";
require_once "PersoMagicien.php";
require_once "PersoMagicienNoire.php";

$persoBase = new PersoBase("Erhan",47,"Nain");
$persoBase->setAlive(25);
$persoBase->setForce(110);
$persoBase->setAgilite(95);
echo "<p>Force : {$persoBase->getForce()} <br> Agilité : {$persoBase->getAgilite()}</p>";
$persoMagicien = new PersoMagicien("Lee",22,"Cyborg");
//$persoMagicien->setAlive(true);


try{
    $persoMagicienNoire = new PersoMagicienNoire("Emrah",30,"Humain","Nécromancien");
}catch(Exception $e){
    echo "Code : {$e->getCode()}<br>Message {$e->getMessage()}<br>";
}

echo $persoBase->persoAvance();
echo "<br>";
echo $persoMagicien ->persoAvance();
echo "<br>";
// <echo $persoMagicienNoire->persoAvance();

var_dump(PersoMagicien::ESPECE_CHOICE);

var_dump($persoBase, $persoMagicien);   

// $persoMagicienNoire->setMagieType("Sorcier");
var_dump($persoMagicienNoire);