<?php
function __autoload($class){
    if (file_exists($class . ".php")){
        require $class . ".php";
    } else {
        require $class . ".Class.php";
    }


}

/*----------------PATTERN REGISTRY--------------------*/
try{
    Registry::setParam('name', 'vasia');
    Registry::setParam('lastName', 'pupkin');
    //Registry::setParam('name', 'petia');
    echo Registry::getParam('name') . "\n";
    echo Registry::getParam('lastName') . "\n";
    echo Registry::getParam('firstName') . "\n";
}
catch (Exception $e){
    echo $e->getMessage() . "\n";
}


/*-------------------SingletonRegistry Pattern ----------------*/
Test::register();
SingletonRegistry::register('Test2');
$y = SingletonRegistry::getClass('Test2');
echo get_class($y) . " - " . $y->name . "\n";
$y->name = 4;
echo get_class($y) . " - " . $y->name . "\n";
