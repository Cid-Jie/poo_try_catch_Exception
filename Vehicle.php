<?php

class Vehicle
{
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward():string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake():string
    {
        $sentence="";
        while($this->setCurrentSpeed > 0){
            $this->setCurrentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    //Get functions for each private attribute
    public function getCurrentSpeed(){
        return $this->currentSpeed;
    }

    public function getColor():string
    {
        return $this->color;
    }
    
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    //Set functions for each private attribute
    public function setCurrentSpeed(int $currentSpeed):void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function setNbSeats(int $nbSeats):void
    {
        $this->nbSeats = $nbSeats;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

}