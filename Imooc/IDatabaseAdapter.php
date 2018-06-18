<?php

namespace Imooc;

interface IDatabaseAdapter
{
    function connect($user,$passwd,$host,$dbname);
    function query($sql);
    function close();
}
