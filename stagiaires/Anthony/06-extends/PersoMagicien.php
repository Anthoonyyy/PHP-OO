<?php

class PersoMagicien extends PersoBase{

    // Propriétés (non héritée) - ajout
    # Créer un getter et un setter
         protected ?int $magiePoint;


    // Propriétés écrasées (public ou protected) - remplacement
         protected int $force = 50;


    // On ne peut pas  écraser une propriété privée du parent 

        // private int|bool|null $alive =5;


    // Méthodes

    // getter de $magiePoint (int)
    public function getMagiePoint(): ?int
    {
    return $this->magiePoint;
    }   

     // setter de magiePoint
     public function setMagiePoint(int $magiePoint){
       
            $this->magiePoint = $magiePoint;
        
    }

    
    // surcharge du constructeur, on peut ajouter des éléments
    public function __construct( string $name, int $age, string $espece, int $magiePoint)
    {
        // on garde le constructeur du parent
      parent::__construct( $name,  $age,  $espece );
      // on ajoute ce que l'on souhaite au constructeur de l'enfant 

      #création du setter
      $this->setMagiePoint($magiePoint);
    }    
    
   

}




  