<?php

require_once 'Vehicle.php';

class GarageCar extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy, string $energyLevel, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->energyLevel = $energyLevel;
        $this->hasParkBrake = $hasParkBrake;
    }
 
    //Get functions for each private attribute
    public function getEnergy():string
    {
        return $this->energy;
    }

    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    //Set function for each private attribute
    public function setEnergy(string $energy): GarageCar
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } 
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake():bool
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake):void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    
  /*  public function start():string
    {
        if($this->energyLevel > 10){
            return 'You can go !';
        }else{
            return 'Refuel after go!';
        }   
    }*/

    public function start():string
    {
        if ($this->hasParkBrake == true){
            throw new Exception('Unable to drive, remove your handbrake !');
        }elseif ($this->hasParkBrake == false){
            if($this->energyLevel > 10){
                return 'You can go !';
            }else{
                return 'Refuel after go!';
            }
        }
    }

}
