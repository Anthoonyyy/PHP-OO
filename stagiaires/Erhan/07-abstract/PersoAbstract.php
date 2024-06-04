<?php

abstract class PersoAbstract{
    // Propriétés
    protected ?string $name;
    protected ?int $healthPoint;
    protected ?int $experience = 0;
    protected string $espece;

    //Constantes
    public const ESPECE_CHOICE = [
        "Humain", 
        "Saiyan",   
        "Elf",
        "Nain",
        "Cyborg",
    ];

    //Méthodes

    //Méthode construct qui sera héritée
    public function __construct(string $theName, string $theEspece)
    {
        $this->setName($theName);
        $this->setEspece($theEspece);
    }

   //Méthode get qui sera héritée
    public function getName(): ?string
    {
        return $this->name;
    }


   //Méthode set qui sera héritée (en fluent setter: retourne l'instance plutôt que de vide)
    public function setName(string $tName): self
    {
        //Protection
        $ProtectedName =trim(strip_tags($tName));
        //nombre de caractères
        $nbName = strlen($ProtectedName);
        if($nbName > 2 && $nbName <= 20){
            $this->name = $ProtectedName;
            return $this;
        }   
        throw new Exception("Nom non valide");     
    }

      //getters de $espece
      public function getEspece(): string
      {
          return $this->espece;
      }

     //setter de espece
     public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    } 

    //Méthodes abstract, elle sont déclarées dans la class abstract, pour obliger les héritiers à redéclarer ces méthodes en public ou protected
    abstract public function setHealthPoint(int $health);
    abstract public function getHealthPoint(): ?int;

    abstract public function setExperience(int $exp);
    abstract public function getExperience(): int;

    // Plus courant, des méthodes qui seront obligatoires pour tous les persos
    abstract public function attack($enemy);
    abstract public function defence($enemy);
}