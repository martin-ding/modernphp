<?php

namespace Imooc;

class Database
{
    protected static $db;
    private function __construct()
    {
        // echo __METHOD__;
    }

    static function getInstance()
    {
        if (!is_null(self::$db)) {
            return self::$db;
        } else {
            self::$db = new static();
            return self::$db;
        }
    }
}