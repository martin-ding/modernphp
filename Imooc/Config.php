<?php

namespace Imooc;

class Config implements \ArrayAccess
{
    protected $configs;

    /*设置config 文件所在的目录*/
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function offsetExists ($offset )
    {

    }

    public function offsetGet ($key)
    {
        if(empty($this->configs[$key]))
        {
            $file_path = $this->path ."/". $key . ".php";
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    public function offsetSet ( $offset , $value )
    {

    }

    public function offsetUnset ( $offset )
    {

    }

}