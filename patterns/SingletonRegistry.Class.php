<?php

/**
 * регистрирует и инициализирует класс
 * записывая его в массив
 * Class SingletonRegistry
 */
class SingletonRegistry
{
    private static $instance;
    private static $list = array();

    public function getInstance(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {}
    private function __wakeup() {}
    private function __clone() {}

    static public function register($className, $arg = null){
        self::getInstance()->setClass($className, $arg);
    }

    protected function setClass($className, $arg = null){
        self::$list[$className] = new $className($arg);
    }

    public static function getClass($className){
        return self::$list[$className];
    }
    
    public static function getList()
    {
        return self::$list;
    }
}

