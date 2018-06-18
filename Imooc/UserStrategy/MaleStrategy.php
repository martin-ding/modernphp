<?php

namespace Imooc\UserStrategy;

use Imooc\IUserStrategy;

class maleStrategy implements IUserStrategy
{
    function showAd()
    {
        echo "male advertisment";
    }

    function showCategory()
    {
        echo "male categories";
    }

}