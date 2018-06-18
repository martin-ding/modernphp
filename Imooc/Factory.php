<?php

namespace Imooc;

class Factory
{
    static function createDatabase()
    {
        return Database::getInstance();
    }

    static function createObject()
    {
        return new Object();
    }

    static function createUser($id)
    {
        $key = "user_".$id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id); 
            Register::set($key, $user);
        }
        return $user;
    }

    static function getDatabase($dbname)
    {
        return Database::getInstance();
    }
}

