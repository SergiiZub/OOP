<?php
namespace Classes;

use Interfaces\IBeing;
use Interfaces\IPlanet;

class Planet implements IPlanet
{
    private $id;
    private $planetName;
    private $planetWeight;
    private $planetSpeed;
    private $beingList = array();
    public static $count;
    
    public function __construct($name, $weight, $speed)
    {
        $this->planetName = $name;
        $this->planetWeight = $weight;
        $this->planetSpeed = $speed;
        $this->id = Planet::$count ++;
    }

    public function addBeing(IBeing $being) :int
    {
        $this->beingList[] = $being;
        return count($this->beingList);
    }

    public function getCountBeings():int
    {
        return count($this->beingList);
    }

    public function getName():string
    {
        return $this->planetName;
    }

    public function getWeight():float
    {
        return $this->planetWeight;
    }
    public function getId(){
        return $this->id;
    }
}
