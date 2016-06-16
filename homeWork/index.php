<?php

use \Classes\Being;
use \Classes\Planet;
use \Classes\PlanetsList;

function autoload($class){
    require(strtr($class, '_\\', '//') . '.php');
}

spl_autoload_extensions('.php');
set_include_path('Interfaces');
set_include_path('Classes');
spl_autoload_register('autoload');


$being = new Being('a');
$being1 = new Being('b');
$being2 = new Being('c');
$planet = new Planet('tatuin', '100', 200);
$planet1 = new Planet('tatu', '100', 200);
$planet2 = new Planet('tat', '100', 200);
$planet->addBeing($being);
$planet->addBeing($being1);
$planet->addBeing($being2);
$pl = new PlanetsList();
$pl->add($planet);
$pl->add($planet1);
$pl->add($planet2);
echo $pl->getCounts() . "\n";




