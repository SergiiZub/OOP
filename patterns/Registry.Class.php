<?php

class Registry
{
    private static $param = [];


    public static function getParam($key)
    {
        if (isset(self::$param[$key])){
            return self::$param[$key];
        } else {
            throw new Exception('Couldn\'t find ' . $key);
        }

    }

    public static function setParam($key, $val)
    {
        if (!array_key_exists($key, self::$param)){
            self::$param[$key] = $val;
        } else {
            throw new Exception('you can\'t rewrite ' . $key);
        }

    }
}


