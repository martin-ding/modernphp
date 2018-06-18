<?php

define("BASEDIR", __DIR__);

require_once BASEDIR."/Imooc/Autoloader.php";

spl_autoload_register("\\Imooc\\Autoloader::autoload");

$config = new Imooc\Config(BASEDIR."/configs");
var_dump($config['controller']);