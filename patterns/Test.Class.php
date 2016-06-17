<?php


class Test implements IRegister
{
    static public function register()
    {
        SingletonRegistry::register(self::class);
    }

}

class Test2 {
    public $name;
    public $age;

    /**
     * Test2 constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}

