<?php

class PersoWarrior extends PersoAbstract{
    
    // Propriétés d'un guerrier
    protected int $strength = 100;
    protected int $resistance = 100;
    protected int $agility = 80;
    // On a hérité du constructeur de PersoAbstract, on va le surcharger

    public function __construct(string $thename,string $theEspece)
    {
        // vient de la classe parent (PersoAbstract)
        parent::__construct($thename,$theEspece);

        // surcharge
        $strength = $this->getStrength();
        $this->setStrength( $strength += self::throwSmallDice(3));
        $resistance = $this->getResistance();
        $this->setResistance($resistance += self::throwSmallDice(3));
        $agility = $this->getAgility();
        $this->setAgility($agility += self::throwSmallDice(2));

        
    }

    /*
    Actions
    */
    public function attack($enemy)
    {
        // notre attaque
        $attackEnemy = $this->getAgility() + $this->throwBigDice(4);
        // défense de l'ennemie
       $defenseEnemy = $enemy->defence();

       if($attackEnemy > $defenseEnemy){
         $wound = ($attackEnemy - $defenseEnemy) + ($this->getStrength()-$enemy->getStrength());
        $healthEnemy = $this->getHealthPoint() - $wound;
        $enemy->setHealthPoint($healthEnemy);
        return "{$this->getName()} a blessé {$enemy->getName()}";
       }

    }
    public function defence()
    {
       $defense = $this->getAgility() + $this->throwBigDice(4);
    }
    



    public function getHealthPoint(): int 
    {
        return $this->healthPoint;
     }

     public function setHealthPoint( int $health){
        $this->healthPoint = $health;
     }

     public function getExperience(): int{
        return $this->experience;
     }

     public function setExperience(int $experience){
        $this->experience = $experience;
     }

  
   
    public function getStrength(): int
    {
        return $this->strength;
    }

    
    protected function setStrength( int $strength)
    {
        $this->strength = $strength;
    }

     
    public function getResistance(): int 
    {
        return $this->resistance;
    }

    
    protected function setResistance( int $resistance)
    {
        $this->resistance = $resistance;
    }

    
    public function getAgility(): int 
    {
        return $this->agility;
    }

   
    protected function setAgility( int $agility)
    {
        $this->agility = $agility;
    }
}