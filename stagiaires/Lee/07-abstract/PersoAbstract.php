<?php


abstract class PersoAbstract {
    
    // PROPERTIES
    protected ?string $name;
    protected ?int $healthPoint;
    protected int $experience = 0;
    
    // CONSTS
    public const ESPECE_CHOICE = ["Humain",
    "Saiyan",
    "Elf",
    "Nain",
    "Cyborg",
    ];
    
    // METHODS
    public function __construct(string $theName)
    {
        $this->setName($theName);
    }                   
    
    
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set the value of name
     *
     * @return self
     */ 
    
    
    // method will be inherited (fluent setters : return instance)
    
    public function setName(string $theName) : self 
    {
        $cleanedName = trim(strip_tags($theName));
        $nbName = strlen($cleanedName);
        if($nbName > 2 && $nbName <= 20) {
            $this->name = $cleanedName;
            return $this;
        }
        throw new Exception('Nom non valide');
    }
    
    abstract public function setHealthPoint(int $health);
    abstract public function getHealthPoint();

    abstract public function setExperience(int $exp);
    abstract public function getExperience();

    abstract public function attack($enemy);
    abstract public function defence($enemy);


}

            