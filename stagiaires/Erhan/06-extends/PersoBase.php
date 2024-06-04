<?php

class PersoBase {
    //Propriétés
    protected int $force = 100;
    protected int $agilite = 100;
    protected string $name;
    protected ?int $hp;
    protected int $age;
    protected int $xp = 0;
    protected ?int $level;
    protected string $espece;
    private null|bool|int $alive;


    //Constantes
    public const ESPECE_CHOICE = ["Humain", 
                                  "Saiyan",   
                                  "Elf",
                                  "Nain",
                                  "Cyborg",
                                ];

    //Méthodes

       //constructeur
    public function __construct(string $name, int $age, string $espece )
    {
        //$this->name = $name;
        $this->setName($name); // correcte
        $this->setAge($age);
        $this->setEspece($espece);
        $this->setAlive(true);
    }    


    public function __toString()
    {
        return self::class." ".$this::class." ".
        $this->getName();
    }


       
    //Getters - Accessors

    //getters de $force
    public function getForce(): int
    {
        return $this->force;
    }

    //getters de $agilite
    public function getAgilite(): int
    {
        return $this->agilite;
    }

    //getters de $name
    public function getName(): string
    {
        return $this->name;
    }

    //getters de $hp
    public function getHp(): int|null
    {
        return $this->hp;
    }

    //getters de $age
    public function getAge(): int
    {
        return $this->age;
    }

    //getters de $xp
    public function getXp(): int
    {
        return $this->xp;
    }

    //getters de $level
    public function getLevel(): int|null
    {
        return $this->level;
    }

    //getters de $espece
    public function getEspece(): string
    {
        return $this->espece;
    }

    //getters de $alive
    public function getAlive(): int|bool|null
    {
        return $this->alive;
    }

       


    //Setters - Mutators

    //setter de force
    public function setForce(int $theforce): void
    {
        if($theforce<=0){
            throw new Exception("La force ne peut pas être négative", 339);
        }
        $this->force = $theforce;        
    }

    //setter de agilite
    public function setAgilite(int $theagilite): void
    {
        if($theagilite<=0){
            throw new Exception("Int positif uniquement", 335);
        }
        $this->agilite = $theagilite;        
    }
    
    //setter de name
    public function setName(string $thename){
        $thename = strip_tags(trim($thename));
        if(strlen($thename)<=2){
            throw new Exception("Nom trop court", 333);
        }
        $this->name = $thename;        
    } 

    //setter de hp
    public function setHp(int $hp){
        if($hp<=1){
            throw new Exception("Int positif uniquement", 335);
        }
        $this->hp = $hp;        
    }

    //setter de age
    public function setAge(int $age){
        if($age<12){
            throw new Exception("Doit être plus grand que 12", 336);
        }
        $this->age = $age;        
    }

    //setter de xp
    public function setXp(int $xp): void
    {
        if($xp<=0){
            throw new Exception("Seulement un entier positif", 337);
        }
        $this->xp = $xp;        
    }

    //setter de level
    public function setLevel(int $level): void
    {
        if($level<=0){
            throw new Exception("Seulement un entier positif", 338);
        }
        $this->level = $level;        
    }


    //setter de espece
    public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    } 

    //setter de alive
    public function setAlive(bool|null|int $alive): void
    {
        if(is_null($alive)){
            $this->alive = null;
        }elseif($alive===0){
            $this->alive = false;
        }elseif($alive===1){
            $this->alive = true;
        }else{
            $this->alive = $alive; 
        }       
    }

    //tout les personnage peuvent avancer
    public function persoAvance(){
        return "Le personnage {$this} avance";
    }
}