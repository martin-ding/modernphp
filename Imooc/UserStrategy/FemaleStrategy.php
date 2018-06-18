<?php

namespace Imooc\UserStrategy;

use Imooc\IUserStrategy;

class FemaleStrategy implements IUserStrategy
{
    function showAd()
    {
        echo "female advertisment<br/>";
    }

    function showCategory()
    {
        echo "female categories <br/>";
    }

}