<?php
namespace Classes;


use Interfaces\IBeing;

class Being implements IBeing
{
    private $name;

    /**
     * Being constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}