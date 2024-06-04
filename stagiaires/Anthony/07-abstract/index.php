<?php
require_once "PersoAbstract.php";
require_once "PersoWarrior.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class abstract</title>
</head>
<body>
    <h1>Class abstract</h1>
    <p>Une classe abstraite ne peut être instanciée, elle va servir de modèle pour les classes enfants</p>
    <p>On peut par contre hériter des propriétées ou méthodes non-abstraite </p>
    <code> // $perso = new PersoAbstract();</code>
    <p>On peut afficher une constante publique</p>
    <code> var_dump(PersoAbstract::ESPECE_CHOICE);</code>
    <?php
     
  var_dump(PersoAbstract::ESPECE_CHOICE);
    ?>
    <h3>Un héritier doit créer les méthodes abstraites</h3>
    <?php
    $persoWarrior1 = new PersoWarrior("Anthony","Sorcier");
    $persoWarrior2 = new PersoWarrior("Samy","Elfe");
    // $persoWarrior1->setHealthPoint(120);
    // echo $persoWarrior1->getHealthPoint();

    var_dump($persoWarrior1,$persoWarrior2);
     echo $persoWarrior1->attack($persoWarrior2)."<br>";
     echo $persoWarrior2->attack($persoWarrior1)."<br>";
     echo $persoWarrior1->attack($persoWarrior2)."<br>";
     echo $persoWarrior2->attack($persoWarrior1)."<br>";
     var_dump($persoWarrior1,$persoWarrior2);

    ?>
</body>
</html>