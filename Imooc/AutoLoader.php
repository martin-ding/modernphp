<?php

namespace Imooc;

class Autoloader
{
    public static function autoload($class)
    {
        $path =  BASEDIR .'/'.str_replace('\\', '/', $class).'.php';
        include $path;
    }
}
