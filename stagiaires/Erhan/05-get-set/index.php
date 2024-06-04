<?php
require_once "PersoClass03.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters et Setters</title>
</head>
<body>
    <h1>Getters et Setters</h1>
    <h2>Accessors ou Getters</h2>
    <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également, mais peu utilisé car peu sécurisé, et inutile depuis PHP 8.1 grâce au readonly)</p>
    <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule</p>
    <pre><code>protected string $name;
protected ?int $hp;
    //getter:
public function getName(): string
    {
        return $this->name;
    }
public function getHp();

$perso03A = new PersoClass03("Steve", 16, "Humain");

//On peur récupérer le nom avec

echo $perso03A->getName();
</code></pre>
<?php
try{
    $perso03A = new PersoClass03("Steve", 16, 24, 22, 33, "Humain", 5);
    echo $perso03A->getName();
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}
?> 

<?php
var_dump($perso03A);


try{
    $perso03A->setName("Erhan");
    $perso03A->setHp(22);
    $perso03A->setAge(25);
    $perso03A->setXp(15);
    $perso03A->setLevel(3);
    $perso03A->setEspece("Humain");
    $perso03A->setAlive(15);
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}


try{
    echo $perso03A->getName();
    echo "<hr>";
    echo $perso03A->getHp();
    echo "<hr>";
    echo $perso03A->getAge();
    echo "<hr>";
    echo $perso03A->getXp();
    echo "<hr>";
    echo $perso03A->getLevel();
    echo "<hr>";
    echo $perso03A->getEspece();
    echo "<hr>";
    echo gettype($perso03A->getAlive());
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}

?>
</body>
</html>