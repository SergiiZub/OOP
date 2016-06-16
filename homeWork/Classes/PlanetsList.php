<?php
namespace Classes;

use Interfaces\IPlanet;
use Interfaces\IPlanetsList;

class PlanetsList implements IPlanetsList
{
    private $planetList = array();

    public function add(IPlanet $planet):int
    {
        $this->planetList[] = $planet;
        return count($this->planetList);
    }

    public function getList():array
    {
        return $this->planetList;
    }

    public function getCounts():int
    {
        return count($this->planetList);
    }

}