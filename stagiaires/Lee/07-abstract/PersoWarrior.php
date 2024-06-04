<?php

class PersoWarrior extends PersoAbstract{
 
    public function getHealthPoint() : ?int
    {
        return $this->healthPoint;
    }
     
    public function getExperience()
    {
        return $this->experience;
    }

 
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;

        return $this;
    }    


    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function attack($enemy) 
    {
        return;
    }

    public function defence($enemy)
    {
        return;
    }

}