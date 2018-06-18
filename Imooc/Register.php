<?php

namespace  Imooc;

class Register
{
    protected static $objects;

    /*就是将$object 存放到本$objects 中alias【代称】中*/
    static function set($alias ,$object)
    {
        self::$objects[$alias] = $object;
    }

    static function register_unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    static function get($alias)
    {
        if (isset(self::$objects[$alias])) {
            return self::$objects[$alias];
        }
    }
}