<?php

abstract class PersoAbstract {

    // Propriétés héritables
        protected ?string $name;
        protected int $healthPoint=1000;
        protected int $experience =0;
        protected string $espece;

    // Constantes publique
         public const  ESPECE_CHOICE = ["Humain",  
                                        "Sorcier",
                                         "Elfe",
                                         "Nain"
                                         ];

                                         
    protected const THROW_DICE_SMALL = 6;
    protected const THROW_DICE_BIG   = 20;


    // Méthodes

 /* méthodes abstraites, elles sotn déclarées dans la classe abstraite, pour obliger
            les héritiers à redéclarer ces méthodes*/

            // on les applique ici à des getters et setters, c'est plutôt rare

            abstract public function setHealthPoint(int $healt);
            abstract public function getHealthPoint(): int ;

            abstract public function setExperience(int $exp);
            abstract public function getExperience(): int ;

            // plus courant, des méthodes qui seront obligatoires pour tous les persos
            abstract public function attack($enemy);
            abstract public function defence();



    // méthode construct qui sera héritée
            public function __construct(string $thename,string $theEspece)
            {

        // utilisation du setter pour le nom
            $this->setName($thename);
            $this->setEspece($theEspece);

             }     
             
            /*
            Méthodes pour les lancer de dés
            */ 

             public function throwSmallDice( int $number=1,bool $addition = true): int
             {
                $int = 0;
                for($i=0; $i <$number;$i++){
                    //
                    if($addition){
                        $int += random_int(1,self::THROW_DICE_SMALL);
                    }else{
                        $int -= random_int(1,self::THROW_DICE_SMALL);
                    }
                }
                return $int;
                
             }

             public function throwBigDice( int $number=1,bool $addition = true): int
             {
                $int = 0;
                for($i=0; $i <$number;$i++){
                    //
                    if($addition){
                        $int += random_int(1,self::THROW_DICE_BIG);
                    }else{
                        $int -= random_int(1,self::THROW_DICE_BIG);
                    }
                }
                return $int;
                
             }
         
             // GETTERS et SETTERS


         // méthode get  qui sera héritée
                public function getName(): ?string
                {
                     return $this->name;
                }
        // getter de $espece (string)

             public function getEspece(): string
             {
                  return $this->espece;
             }
             
            public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                  $this->espece = $espece;
            }else{
                throw new Exception("Espèces inconnu",334);
                 }
            }

        // méthode set  qui sera héritée (en fluent setters: retourne l'instance plutôt que du vide)
            public function setName( string $thename): self
          {
            // protection
                 $Protectedname = trim(strip_tags($thename));

            // nombre de caractères
                 $nbName = strlen($Protectedname);

            // si le nom est plus grand que 2 et plus petit ou égal à 21 caractères
                if($nbName > 2 && $nbName < 20){
                
                // on remplit la propriété avec la variable vérifiée
                    $this->name = $Protectedname;

                // on renvoie l'instance (fluent setting)
                    return $this;
            }

            // si le nom n'est pas valide, (else implicite via le return)
                 throw new Exception("Nom non valide");
         }

        
}