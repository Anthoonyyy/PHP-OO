<?php

require_once "PersoAbstract.php";
require_once "PersoWarrior.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Abstact</title>
</head>
<body>
    <h1>Class Abstract</h1>
    <p>An abstract class cannot be instanced. It is a model for child classes</p>
    
    <?php
        var_dump(PersoAbstract::ESPECE_CHOICE);
    ?>
    
<?php
    $persoWarrior1 = new PersoWarrior("Luke", 'Humain');
    var_dump($persoWarrior1);

?>


</body>
</html>