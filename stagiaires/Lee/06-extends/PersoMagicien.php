<?php

class PersoMagicien extends PersoBase{
    // Propriétés (non héritées) - ajout
    # créer un getter et un setter
    protected ?int $magiePoint;

    // Propriétés écrasées (public ou protégées) - remplacement
    protected int $force = 50;

    // On ne peut pas l'écraser une propriété privée du parent !
    // public int|bool|null $alive = 5;

    // méthodes

    // Surcharge du constructeur on peut ajouter des éléments
    public function __construct(string $name, int $age, string $espece){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
         $this->setMagiePoint(100);
    }
// get magie point
public function getMagiePoint () : int|null {
    return $this->magiePoint;
}

//  set magie point
public function setMagiePoint(int|string $magPoint) : void
{
    
    if(!is_int($magPoint)){
        throw new Exception("MagiePoint doit être un chiffre", 350); // pas sur du règle pour les chiffrage des erreurs mais il me semble logique de utiliser une décienne différent per chaque classe
    }else if ($magPoint < 1){
        throw new Exception("MagiePoint doit être plus grand que 0", 351);
    }else{
        $this->magiePoint = $magPoint;
    }
}


    


}